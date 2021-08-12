const signInBtn = document.getElementById('sign-in');
const signUpBtn = document.getElementById('sign-up');
const container = document.getElementById('container');

const form_inputs = document.querySelectorAll('input[type]');

const signUpForm = document.forms['sign-up-form'],
      signInForm = document.forms['sign-in-form'];

class Form{
    constructor(form, inputs, data_type){
        this.form = form;
        this.inputs = inputs;
        this.data_type = data_type;
        this.check_errors();
        this.submit();

        // return this;
    }
    isSubmit = false;

    submit = ()=>{
        try {
            this.form.addEventListener('submit', ()=>{
                this.isSubmit = true;
                this.check_errors();
                this.processForm();
                this.load_form_data(this.dataSent, this.toggle_form_feedback);
            });
        } catch (error) {
            console.log(error);
        }
    };

    processForm = ()=>{
        let inputVals = {},
        inputs = this.inputs,
        error = '',
        errors = [];

        this.dataSent = false;

        for(let i in inputs){  
            inputVals[i] = inputs[i].value.trim();
            if(inputs[i].type == 'checkbox')
                inputVals[i] = inputs[i].checked;

            error = this.process_input(this.inputs[i]);
            if(error) errors.push(error);
        
        };

        if(errors.length == 0){
            this.dataSent = JSON.stringify(inputVals);
        }

    };

    process_input = (el)=>{
        let isError = (el.checkValidity() == false);
            
            if(isError){
                el.setAttribute('error', el.validationMessage);
                return el.validationMessage;
            }

            el.removeAttribute('error');
            return isError;
    };

    toggle_form_feedback = (el = false)=>{

        let formHeading = this.form.querySelector('h1'),
        formMsg = this.form.querySelector('p.msg'),
        form_feedback  = {},
        show_feedback = form_feedback =>{

            formHeading.classList.add('feedback-active');
            formMsg.classList.add(form_feedback.type);
            formMsg.innerHTML = form_feedback.content;

        };

            formHeading.classList.remove('feedback-active');
            formMsg.classList.remove('error');
            formMsg.classList.remove('success');
            formMsg.innerHTML = '';

        try {
                if(el && el.hasAttribute('error'))
                show_feedback(this.set_form_feedback(el));
        } catch (error) {
            
                if(typeof(el) == 'object' && el.type != null && el.content != null){
                   
                    show_feedback(el);
                    if(el.type == "success"){
                        if(this.data_type == 'login')
                         window.location = "../home";

                        activate_signIn();
                    } 
                }
                
        }
    };

    set_form_feedback = (el)=>{
        let type = '',
                content = '';
    
            if(el.hasAttribute('error')){
                type = 'error';
                content = el.getAttribute('error');
            }
          
        return {type,content};
    };

    check_errors = (server_response = false)=>{

        let empty_fields = 0;

        for(let i in this.inputs){

            if(this.inputs[i].validity.valueMissing) empty_fields++;
            
            this.inputs[i].addEventListener('click', (el)=>{
               
                this.toggle_form_feedback();
                this.processForm();
            });

            this.inputs[i].addEventListener('keyup', (el)=>{
                this.process_input(el.target);
                this.toggle_form_feedback(el.target);

                // if(el.keyCode == 32)
                this.inputs[i].value = this.inputs[i].value.trim();
            });

        }

        if(this.isSubmit){
            let form_feedback = false;

            if(empty_fields > 0){
                form_feedback = {
                    'type' : 'error',
                    'content' : 'All fields are mandatory'}
            }

            this.toggle_form_feedback(form_feedback);
        };
    };

    load_form_data = (data, callback)=>{
       if(!data) return;
        let xhttp = new XMLHttpRequest(),
            data_type = this.data_type;
       
        xhttp.onreadystatechange = function(){
            if(xhttp.readyState == 4 && xhttp.status == 200){
            try {
               callback(JSON.parse(xhttp.responseText));
            } catch (error) {
                console.log(xhttp.responseText);
            }   
            }
        };

        xhttp.open('POST', this.form.action, true);
        xhttp.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
        xhttp.send(JSON.stringify({data_type,data}));

    };

};

const signUp = new Form(
    signUpForm,{
    'username' : signUpForm.username,
    'email' : signUpForm.email,
    'pwd' : signUpForm.password,
    'pwd_repeat' : signUpForm.password_repeat,
    'csrf_token' : signUpForm.token
    }, 'signup');

const signIn = new Form(
    signInForm,{
    'username' : signInForm.username,
    'pwd' : signInForm.password,
    'csrf_token' : signInForm.token,
    'remember_me' : signInForm.rememberme
    }, 'login');

const activate_signIn = ()=>{
    container.classList.remove('right-panel-active');
};

const activate_signUp = ()=>{
    container.classList.add('right-panel-active');
};

try {
   
    signInBtn.addEventListener('click', activate_signIn);
    signUpBtn.addEventListener('click', activate_signUp);
 
} catch (error) {
    console.log(error);
}

// signUp.toggle_form_feedback({'type': 'success', 'content' : 'iyo imeweza'});

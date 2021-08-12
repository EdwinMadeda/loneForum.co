const _ = el => document.querySelector(el); 

const nav_wrapper = _('.nav-wrapper'),
      a_links = nav_wrapper.querySelectorAll('a');

const nav_search_btn = document.querySelector('.nav-link .search-icon'),
      nav_search_close_btn = _('.nav-link .close-btn'),
      nav_search_wrapper = _('.search-wrapper');

const intro_container = _('.container.intro');

const navigation = _('.navigation'),
      nav_hamburger_btn = _('.navigation .hamburger-btn');

const bg_overlay = _('.bg-overlay');

const my_menu_slide_out_btn = _('.my_menu .menu_slide_out_btn');
const mycategory_search_btn = _('.mycategory_search_btn');
const mycategory_title_select = _('.my_categories_cont .title_select');

const testi_slider_container = _('.testi-slider');

const switch_mycategory = (e)=>{
    const mycategory_title = _('.my_categories_cont .title[main]');

    console.log(mycategory_title);
};

const show_mycategory_search = ()=>{
    const search_category = _('.my_menu .search_category');
    search_category.classList.toggle('show');
};

const slide_out_my_menu = (e)=>{
    const my_menu_slide_out = _('.my_menu .menu_slide_out'),
          my_menu_body =  _('.my_menu .menu_body');

        my_menu_slide_out.classList.toggle('hide');
};

const show_nav_search_area = ()=>{
    nav_search_close_btn.classList.remove('hidden');
    nav_search_btn.classList.add('hidden');
    nav_search_wrapper.classList.remove('hidden');
    };

const hide_nav_search_area = ()=>{
    nav_search_close_btn.classList.add('hidden');
    nav_search_btn.classList.remove('hidden');
    nav_search_wrapper.classList.add('hidden');
};

const showNavigation = ()=>{
    navigation.classList.toggle('visible');
    bg_overlay.classList.toggle('nav-visible');
};

const stickNavBar = (status = true)=>{
    const docScrollTop = document.documentElement.scrollTop,
          navbar = document.querySelector("header .top");

     // if docScrollTop position is greater than 100 then the header is fixed
     navbar.classList[(docScrollTop>100)?'add':'remove']("fixed");

     if(!status)
     navbar.classList.remove('fixed');
};

class Forums{
    constructor(){}
    collapse(){}
};

class Testi_slider{
    constructor(){
        try {
            this.slides = this.container.children;
        } catch (error) {
            return;
        }

    }
    container = _('.testi-slider');

    move_slides(current_index){
        this.load();
        let ctrl_btns = _('#testimonials .slide-controls').children;
        
        for (let i = 0; i < ctrl_btns.length; i++) 
            ctrl_btns[i].classList.remove('active');
            ctrl_btns[current_index].classList.add('active');
            this.container.style.setProperty('--i', current_index);    
    };

    load(){
        const responsive = [
            {breakpoint: {width:0, item:1}},
            {breakpoint: {width:991, item:2}}
        ],
        slide_ctrls = _('#testimonials .slide-controls');

        let item_per_slide = 0,
        auto_slide = 0,
        slide_dots = 0,
        slide_count = this.slides.length;


        for (const i in responsive) {
           if(window.innerWidth > responsive[i].breakpoint.width)
            item_per_slide = responsive[i].breakpoint.item;
        }

        this.container.style.setProperty('--n', slide_count/item_per_slide);
        slide_dots = Math.ceil(slide_count/item_per_slide);
        slide_ctrls.innerHTML = '';

        for (let i=0; i< slide_dots; i++) {
           const div = document.createElement('div');
                 div.id = i;
                 div.setAttribute('onclick', "testi_slider.move_slides(this.id)");
                 slide_ctrls.appendChild(div);
                 if(i == 0) div.classList.add('active');
        }
    };
  
    
};

const testi_slider = new Testi_slider();
console.log(testi_slider.parent_width);


window.addEventListener('scroll', stickNavBar);
window.addEventListener('resize', testi_slider.load());
window.addEventListener('resize', console.log('bingo'));

a_links.forEach(el => {
    el.addEventListener('click', (e)=>{
        for (const i in a_links) {
            if (Object.hasOwnProperty.call(a_links, i)) 
            a_links[i].classList.remove('active');
        }
        e.target.classList.add('active');
        showNavigation();
    });
});

try {
    nav_search_btn.addEventListener('click', show_nav_search_area);
    nav_search_close_btn.addEventListener('click', hide_nav_search_area);
    nav_hamburger_btn.addEventListener('click', showNavigation);

    my_menu_slide_out_btn.addEventListener('click', slide_out_my_menu);
    mycategory_search_btn.addEventListener('click', show_mycategory_search);
    mycategory_title_select.addEventListener('click', switch_mycategory);

} catch (error) {
    console.log(error);
}   

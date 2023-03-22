import Choices from "choices.js";
console.log('choices loaded');
window.choices = (e)=>{
    return new Choices(e,{
        maxItemCount:3,
        removeItemButton:true
    })
}
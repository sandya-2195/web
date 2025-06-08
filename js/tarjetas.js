const counters = document.querySelectorAll(".num");

counters.forEach((counter) =>{
    counter.innerText ="0";
    const updateCounter = () =>{
        const target = +counter.getAttribute("data-target");
        const count = +counter.innerText;
        const increment = target/ 200;
        if(count < target){
            counter.innerText = `${Math.ceil(count + increment)}`;
            setTimeout(updateCounter, 1);
        }else counter.innerText = target;
    };
    updateCounter();
})
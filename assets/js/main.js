
       const last3 = document.querySelector('div.last3');
       const niente = document.querySelector('p.niente');
       if(niente === null){

       }else {
        niente.style.color = '#fff';
        niente.style.fontSize = '30px';
     
        last3.appendChild(niente);
       }


   for(i=0;i<10;i++){

       const mainDiv = document.querySelector('div.top10');

       const subDiv = document.querySelectorAll('div.card-data')[i];

       mainDiv.appendChild(subDiv);

       $(document).ready(function(){
        var element = $("p.title");
        element.find("span").remove();
        var newString = element.html();
        });


       let domain = document.querySelectorAll('span.domain')[i];
       let repDom = domain.textContent.replace("(","").replace(")","");
       domain.textContent = repDom;

       

       let tit = document.querySelectorAll('p.who-tit')[i];
       tit.textContent = domain.textContent;



       let lung = document.querySelectorAll('p.tagline')[i];
       let subs = lung.textContent.substring(9, 22); 

       lung.textContent = subs;

       let val = document.querySelectorAll('a.title')[i];

       let newVal = val.textContent.substring(0, 80);

       val.textContent = newVal+" ...read more";
       
       if(val.getAttribute('href').includes("/r/italy/")){
           const sito = "https://old.reddit.com";
           const dir = val.getAttribute('href');
           val.setAttribute('href', sito+dir);

       }

       console.log(val.getAttribute('href'));
		   
		const titPin = document.querySelectorAll('input.titPin')[i];
      	const fontPin = document.querySelectorAll('input.fontPin')[i];
		const hourPin = document.querySelectorAll('input.hourPin')[i];
		  
		titPin.value = val.textContent;
		fontPin.value = domain.textContent;
		hourPin.value = lung.textContent;

		titPin.style.display = 'none';
		fontPin.style.display = 'none';
		hourPin.style.display = 'none';

   }



   
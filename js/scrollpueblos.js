window.addEventListener('scroll', function () 
{

  var imagen = document.querySelectorAll('.img-scroll');
  
  
for (var i = 0; i < imagen.length; i++ )
{

  var altura = window.innerHeight/1.3;

  var distancia = imagen[i].getBoundingClientRect().top;
  
  console.log( altura)
  console.log(distancia)


    imagen[i].classList.add('tranform_right')


if(distancia <= altura)


{

  imagen[i].classList.add('aparece')


}
else{
  imagen[i].classList.remove('aparece')

}

}





   
  
  
})
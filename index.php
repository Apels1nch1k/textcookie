<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="/dist/output.css" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>

    <title>Document</title>
</head>

<body class="font-mono" id="app">

  <header class="relative">
      <div class=" container mx-auto">
        <nav class="flex justify-between items-center pt-7">
          <a href="#" class="text-4xl font-medium  ml-16">ЭC</a>
          <ul class="flex gap-12">
            <li><a href="#main" class="font-medium text-xl text-black hover:text-gray-300 mc-">Главная</a></li>
            <li><a href="#about" class="font-medium text-xl text-black hover:text-gray-300">О компании</a></li>
            <li><a href="#service" class="font-medium text-xl text-black hover:text-gray-300">Услуги</a></li>
          </ul>
          <ul class="flex gap-12 text-left">
                <?if ($_COOKIE == True):?>

                <li><a href="./vendor/exit.php" class=" loginBtn font-medium text-xl text-black hover:text-gray-300">Выход</a></li>
              <?else:?>

                    <li><a href="#" class=" logModalBTN font-medium text-xl text-black hover:text-gray-300">Вход</a></li>
                    <li><a href="#" class=" regModalBTN font-medium text-xl text-black hover:text-gray-300">Регистрация</a></li>

              <? endif;?>
          </ul>
          </ul>
        </nav>
      </div>
  </header>
 
  <main>
    <section id="main">
      <div class="container mx-auto">
        
        <h1 class="pt-24 text-black text-5xl text-center mx-auto  font-bold leading-snug mt-12 m-12">
          С
          металлом 
          мы 
          дружим
        </h1>
        <p class="text-xl tracking-wide text-center max-w-xl mx-auto mt-1">Профессионально выполним любые фрезерные работы по металлу на станках с 
          ЧПУ. Все виды фрезеровки: 
          горизонтальная, вертикальная, углом, концевая, торцевая, фасонная.</p>
      </div>
        <div class="flex justify-center mt-20">
    
          <button  id="openBTN" type='button' class=" showModal mt-16 py-3 px-8 rounded-xl bg-sky-600 shadow-lg shadow-sky-600/50 text-white
          transition ease-in-out delay-150 hover:-translate-y-1 hover:scale-110 hover:bg-sky-500 duration-300 hover:shadow-lg hover:shadow-sky-600/50">Заказать</button>
      
        </div> 
      <div  class=" modal hidden bg-black bg-opacity-50 absolute inset-0 justify-center items-center m-auto flex" >
        <div class="bg-gray-200 max-w-sm py-6 rounded-xl p-5 px-3.5 ">
          <div class=" block"> 
            <svg xmlns="http://www.w3.org/2000/svg" class=" closeModal h-10 w-10 cursor-pointer relative left-80 bottom-3" id="close-modal" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
              <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
            </svg>
            <p class=" flex text-2xl text-bold text-center justify-center ">Оформление заказа</p>
           
            <form class=" m-auto text-center mt-6 " medhod="get" action="./vendor/order.php">
              <input type="text"
              placeholder="Фамилия"
              name="last_name"
              class="focus:outline-none focus:ring focus:border-blue-500  p-3 m-2 rounded-xl pr-8" />
              <input type="text"
              placeholder="Имя"
              name="Name"
              class="focus:outline-none focus:ring focus:border-blue-500  p-3 m-2 rounded-xl pr-8" />
              <input type="text"
              placeholder="Номер телефона"
              name="Phone"
              class="focus:outline-none focus:ring focus:border-blue-500  p-3  m-2 rounded-xl pr-8" />
              <div class=" mt-3 flex justify-center">
                <button id="" class="mt-16 py-3 px-8 rounded-xl bg-sky-600 shadow-lg shadow-sky-600/50 text-white">Оформить заказ</button>
              </div>
            </form>
           
          </div>
        </div>
      </div>
      <div  class=" LogModal hidden bg-black bg-opacity-50 absolute inset-0 justify-center items-center m-auto flex" >
        <div class="bg-gray-200 max-w-sm py-6 rounded-xl p-5 px-3.5">
          <div class=" block"> 
            <svg xmlns="http://www.w3.org/2000/svg" class=" closelogModal h-10 w-10 cursor-pointer relative left-80 bottom-3" id="close-modal" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
              <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
            </svg>
            <p class=" flex text-2xl text-bold text-center justify-center ">Вход</p>
           
            <form class=" m-auto text-center mt-6" medhod="get" action="./vendor/auth.php">
              <input type="text"
              placeholder="Логин"
              name="login"
              class="focus:outline-none focus:ring focus:border-blue-500  p-3 m-2 rounded-xl pr-8" />
              <input type="password"
              placeholder="Пароль"
              name="password"
              class="focus:outline-none focus:ring focus:border-blue-500  p-3 m-2 rounded-xl pr-8" />
              <div class=" mt-3 flex justify-center">
                  <button id="" class="mt-16 py-3 px-8 rounded-xl bg-sky-600 shadow-lg shadow-sky-600/50 text-white">Войти</button>
              </div>
              </form>
            
          </div>
        </div>
      </div>
      <div  class=" RegModal hidden bg-black bg-opacity-50 absolute inset-0 justify-center items-center m-auto flex" >
        <div class="bg-gray-200 max-w-sm py-6 rounded-xl p-5 px-3.5">
          <div class=" block"> 
            <svg xmlns="http://www.w3.org/2000/svg" class=" closeregModal h-10 w-10 cursor-pointer relative left-80 bottom-3" id="close-modal" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
              <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
            </svg>
            <p class=" flex text-2xl text-bold text-center justify-center ">Регистрация</p>
           
            <form class=" m-auto text-center mt-6 " medhod="get" action="./vendor/singup.php" >
              <input type="email"
              placeholder="Email"
              name="email"
              class="focus:outline-none focus:ring focus:border-blue-500  p-3 m-2 rounded-xl pr-8" />
              <input type="text"
              placeholder="Логин"
              name="login"
              class="focus:outline-none focus:ring focus:border-blue-500  p-3 m-2 rounded-xl pr-8" />
              <input type="password"
              placeholder="Пароль"
              name="pass"
              class="focus:outline-none focus:ring focus:border-blue-500  p-3  m-2 rounded-xl pr-8" />
              <div class=" mt-3 flex justify-center">
                <button id=""   class="mt-16 py-3 px-8 rounded-xl bg-sky-600 shadow-lg shadow-sky-600/50 text-white">Зарегистрироваться</button>
              </div>
            </form>
          
          </div>
        </div>
      </div>
    </section>
    <section id="about">
      <div class="container mx-auto">
        <div class=" flex justify-between mt-[560px] pb-28">
          <div class="flex flex-col w-1/2">
            <div class="text-sky-800 font-bold text-4xl select-none pb-8">О компание</div>
            <div class="mt-2 max-w-sm text-lg">Собственное производство, большой опыт работы, квалифицированные сотрудники позволяют нам изготавливать детали практически любой сложности. Благодаря большому парку станков выполняем разнообразный цикл работ с материалами и производим большой ассортимент готовых изделий. Вы в любое время можете приехать на наше круглосуточное производство в Москве и убедиться в качестве изготовления, либо проверить исполнение Вашего заказа.</div>
          </div>
          <div class="flex flex-col">
            <img src="./img/4pu1.jpg" alt="about" class=" w-[700px] h-[424px] rounded-2xl">

          </div>

        </div>


      </div>

    </section>
    <section id="service">
      <div class="container mx-auto mt-[420px] mb-96 justify-center">
        <div class="justify-center">
          <div class="text-sky-800 font-bold text-4xl select-none flex justify-center">Услуги</div>
          <div class="font-bold mt-5 text-xl">Компания «Электростатика» оказывает следующие услуги в области металлообработки: </div>
          <div class="flex justify-between mt-5 max-w-6xl text-lg">
            Компания «Электростатика» оказывает следующие услуги в области металлообработки:

            Механическая обработка по чертежам заказчика. В цехах компании установлены станки JSTOMI: CF36, CFG46, CFG46Y2 и универсальное металлообрабатывающее оборудование российского и китайского производства. 
            Заточка инструмента (фрезы, метчики, протяжки, токарные резцы, пильные диски, дисковые пилы и т.д.). Работы производятся на профессиональных заточных и оптико-профилешлифовальных станках.
            Восстановление изношенных отверстий спецтехники. Услуга оказывается на месте нахождения техники мобильными станками собственного производства. 
            Лазерная гравировка. На производстве установлен лазерный гравировальный станок для нанесения изображения или текста на металл, пластик, кожу, дерево и прочие материалы.  
        
        Чтобы более подробно узнать о нужной услуге, выберите соответствующий раздел в боковом меню. 
          </div>
        </div>
      </div>

    </section>
  </main>
  <footer class="bg-gray-900 mx-auto h-80">
    <div class="container mx-auto flex m-5 bg-gray-900">
      <div class=" mt-5">
        <div class="flex text-white text-3xl font-bold">
          Контакты 
        </div>
        <div class="mt-8 text-indent">
          <p class="text-white mt-3">
            +7 (3412) 43-08-04</p>
          <p class="text-white mt-3">
            +7 (3412) 43-08-04</p>
          <p class="text-white mt-3">info@eltrostatic.ru</p>
        </div>
        <div class="flex  mt-3">
          <a><svg xmlns="http://www.w3.org/2000/svg" href="#" viewBox="0 0 48 48" width="48px" height="48px"><linearGradient id="c7KC3Nc5k7hJ0awmj858~a" x1="9.766" x2="37.851" y1="5.625" y2="41.881" gradientUnits="userSpaceOnUse"><stop offset="0" stop-color="#33bef0"/><stop offset="1" stop-color="#0a85d9"/></linearGradient><path fill="url(#c7KC3Nc5k7hJ0awmj858~a)" d="M24,4C12.954,4,4,12.954,4,24s8.954,20,20,20s20-8.954,20-20S35.046,4,24,4z"/><path d="M31.411,34c-1.185,0-1.771-0.77-2.584-1.834c-0.313-0.412-0.698-0.917-1.212-1.514	c-0.802-0.937-1.324-1.343-1.616-1.519v2.773C25.999,34,24.002,34,23.149,34c-3.154,0-6.549-2.069-9.081-5.535	C10.747,23.922,10,19.844,10,18.774C10,17.68,10.724,17,11.89,17h2.644c1.544,0,1.946,1.231,2.119,1.756	c0.78,2.614,1.707,4.458,2.348,5.447v-2.866c-0.045-0.803-0.27-1.112-0.508-1.439C18.285,19.614,18,19.225,18,18.641	C18,17.721,18.711,17,19.619,17h4.648C24.788,17,26,17.196,26,19.014v4.821c0.043-0.04,0.092-0.089,0.149-0.15	c1.738-2.049,3.32-5.287,3.336-5.319C29.883,17.477,30.592,17,31.531,17h2.618c1.231,0,1.816,0.795,1.85,1.584	c0.01,0.237-0.026,0.491-0.107,0.753c-0.199,0.989-1.313,2.947-3.603,6.3l-0.192,0.286c-0.014,0.023-0.033,0.056-0.053,0.09	c0.006,0.008,0.011,0.016,0.018,0.025c0.283,0.405,0.99,1.259,1.458,1.824c1.118,1.351,2.116,2.883,2.372,3.645	c0.082,0.303,0.113,0.537,0.108,0.766C35.976,33.134,35.357,34,34.029,34H31.411z" opacity=".05"/><path d="M31.411,33.5c-0.937,0-1.407-0.616-2.187-1.638c-0.318-0.418-0.709-0.93-1.229-1.537	c-1.451-1.694-2.11-1.826-2.278-1.826c-0.12,0-0.177,0.009-0.2,0.014c0.012,0.013-0.018,0.125-0.018,0.42v2.971	c0,1.323-0.939,1.594-2.35,1.594c-2.995,0-6.239-1.993-8.678-5.33c-3.242-4.436-3.972-8.368-3.972-9.396	c0-0.821,0.493-1.274,1.39-1.274h2.644c1.09,0,1.42,0.729,1.644,1.412c1.176,3.938,2.731,6.314,3.29,6.569	c0.017-0.086,0.033-0.243,0.033-0.521v-3.623c-0.054-0.979-0.346-1.379-0.604-1.734C18.71,19.348,18.5,19.06,18.5,18.641	c0-0.65,0.481-1.141,1.119-1.141h4.648c0.817,0,1.232,0.509,1.232,1.514v5.185c0,0.257,0.157,0.303,0.164,0.304	c0.227-0.003,0.4-0.003,0.848-0.473c1.798-2.118,3.409-5.415,3.425-5.448c0.318-0.713,0.856-1.082,1.595-1.082h2.618	c0.962,0,1.327,0.571,1.35,1.105c0.008,0.179-0.021,0.376-0.085,0.584c-0.255,1.25-2.142,4.12-3.538,6.166	c-0.092,0.135-0.195,0.29-0.195,0.29c-0.075,0.129-0.178,0.305-0.182,0.379c-0.001,0.025,0.012,0.104,0.156,0.306	c0.286,0.41,0.976,1.243,1.479,1.852c1.066,1.288,2.048,2.786,2.283,3.485c0.062,0.231,0.086,0.42,0.082,0.595	c-0.017,0.6-0.412,1.238-1.471,1.238H31.411z" opacity=".07"/><path fill="#fff" d="M34.937,19.041c0.046-0.151,0.068-0.291,0.062-0.416C34.984,18.263,34.735,18,34.149,18h-2.618	c-0.661,0-0.966,0.4-1.144,0.801c0,0-1.632,3.359-3.513,5.574c-0.61,0.641-0.92,0.625-1.25,0.625C25.447,25,25,24.786,25,24.199	v-5.185C25,18.32,24.827,18,24.268,18h-4.649C19.212,18,19,18.32,19,18.641c0,0.667,0.898,0.827,1,2.696v3.623	c0,0.88-0.153,1.04-0.483,1.04c-0.89,0-2.642-3-3.815-6.932C15.448,18.294,15.194,18,14.533,18H11.89C11.127,18,11,18.374,11,18.774	c0,0.721,0.6,4.619,3.875,9.101C17.25,31.125,20.379,33,23.149,33c1.678,0,1.85-0.427,1.85-1.094v-2.972	C25,28.133,25.183,28,25.717,28c0.381,0,1.158,0.25,2.658,2c1.73,2.018,2.044,3,3.036,3h2.618c0.608,0,0.957-0.255,0.971-0.75	c0.003-0.126-0.015-0.267-0.056-0.424C34.75,31.25,33.86,29.842,32.75,28.5c-0.615-0.743-1.222-1.479-1.501-1.879	C31.062,26.36,30.991,26.176,31,26c0.009-0.185,0.105-0.361,0.249-0.607C31.223,25.393,34.607,20.642,34.937,19.041z"/></svg></a>
          <a><svg xmlns="http://www.w3.org/2000/svg" href="#" viewBox="0 0 48 48" width="48px" height="48px"><radialGradient id="yOrnnhliCrdS2gy~4tD8ma" cx="19.38" cy="42.035" r="44.899" gradientUnits="userSpaceOnUse"><stop offset="0" stop-color="#fd5"/><stop offset=".328" stop-color="#ff543f"/><stop offset=".348" stop-color="#fc5245"/><stop offset=".504" stop-color="#e64771"/><stop offset=".643" stop-color="#d53e91"/><stop offset=".761" stop-color="#cc39a4"/><stop offset=".841" stop-color="#c837ab"/></radialGradient><path fill="url(#yOrnnhliCrdS2gy~4tD8ma)" d="M34.017,41.99l-20,0.019c-4.4,0.004-8.003-3.592-8.008-7.992l-0.019-20	c-0.004-4.4,3.592-8.003,7.992-8.008l20-0.019c4.4-0.004,8.003,3.592,8.008,7.992l0.019,20	C42.014,38.383,38.417,41.986,34.017,41.99z"/><radialGradient id="yOrnnhliCrdS2gy~4tD8mb" cx="11.786" cy="5.54" r="29.813" gradientTransform="matrix(1 0 0 .6663 0 1.849)" gradientUnits="userSpaceOnUse"><stop offset="0" stop-color="#4168c9"/><stop offset=".999" stop-color="#4168c9" stop-opacity="0"/></radialGradient><path fill="url(#yOrnnhliCrdS2gy~4tD8mb)" d="M34.017,41.99l-20,0.019c-4.4,0.004-8.003-3.592-8.008-7.992l-0.019-20	c-0.004-4.4,3.592-8.003,7.992-8.008l20-0.019c4.4-0.004,8.003,3.592,8.008,7.992l0.019,20	C42.014,38.383,38.417,41.986,34.017,41.99z"/><path fill="#fff" d="M24,31c-3.859,0-7-3.14-7-7s3.141-7,7-7s7,3.14,7,7S27.859,31,24,31z M24,19c-2.757,0-5,2.243-5,5	s2.243,5,5,5s5-2.243,5-5S26.757,19,24,19z"/><circle cx="31.5" cy="16.5" r="1.5" fill="#fff"/><path fill="#fff" d="M30,37H18c-3.859,0-7-3.14-7-7V18c0-3.86,3.141-7,7-7h12c3.859,0,7,3.14,7,7v12	C37,33.86,33.859,37,30,37z M18,13c-2.757,0-5,2.243-5,5v12c0,2.757,2.243,5,5,5h12c2.757,0,5-2.243,5-5V18c0-2.757-2.243-5-5-5H18z"/></svg></a>
        </div>
      </div>    
      <div class="text-white mx-28 mt-5">
        <div class="">
          <p class="text-3xl font-bold"> Наш Адрес</p>
        </div>
        <div class="mt-8">
          <p> Пушкинская ул., 268, Ижевск, республика Удмуртия, 426008</p>
        </div>

      </div>
    </div>

    </div>
  </footer>    






  <script>
    const modal = document.querySelector('.modal');

    const showModal = document.querySelector('.showModal');

    const closeModal = document.querySelector('.closeModal');

    showModal.addEventListener('click', function(){
      modal.classList.remove('hidden')
    });

    closeModal.addEventListener('click', function(){
      modal.classList.add('hidden')
    });


    const logModal = document.querySelector('.LogModal');
    const logShowBTN = document.querySelector('.logModalBTN');
    const closelogModal = document.querySelector('.closelogModal');

    logShowBTN.addEventListener('click', function(){
      logModal.classList.remove('hidden')
    });

    closelogModal.addEventListener('click', function(){
      logModal.classList.add('hidden')
    });



    const RegModal = document.querySelector('.RegModal');
    const regShowBTN = document.querySelector('.regModalBTN');
    const closeregModal = document.querySelector('.closeregModal');

    regShowBTN.addEventListener('click', function(){
      RegModal.classList.remove('hidden')
    });

    closeregModal.addEventListener('click', function(){
      RegModal.classList.add('hidden')
    });



  </script>
</body>


</html>
@extends('layouts.main')

@section('content')

<!-- Main Section -->
<main  class="l-main">
    
    <!-- HEADER -->
    <section class="home" id="home">
        <div class="home__container bd-container bd-grid">
            <div class="home__data">
                <h1 class="home__title">Book now!</h1>
                <h2 class="home__subtitle">Plan your trip with us <br> And Enjoy your journey</h2>
                 <a href="#" class="button">Book a trip</a>
            </div>
            <img src="{{ asset('assets/car-header.png') }}" alt="" class="home__img">
        </div>
    </section>

    <!-- ABOUT -->
    <section class="about section bd-container" id="about">
        <div class="about__container  bd-grid">
            <div class="about__data">
                <span class="section-subtitle about__initial">About us</span>
                <h2 class="section-title about__initial">Rent affordable van!</h2>
                <p class="about__description">Biggest terminal in the entire city, with excellent customer service, high quality vans and at the best price, visit us.</p>
                <a href="#" class="button">Explore history</a>
            </div>
            <img src="{{ asset('assets/about1.png') }}" alt="" class="about__img">
        </div>
    </section>

    <!-- SERVICES -->
    <section class="services section bd-container" id="services">
        <span class="section-subtitle">Offering</span>
        <h2 class="section-title">Our amazing services</h2>
        <div class="services__container  bd-grid">
            <div class="services__content">
                <svg xmlns="http://www.w3.org/2000/svg" width="80" height="80" enable-background="new 0 0 512 512" viewBox="0 0 512 512" class="services__img">
                    <path id="transaction" d="M377.187,8.258H134.813c-4.566,0-8.769,1.627-12.023,4.348c-2.465,2.053-4.396,4.736-5.55,7.797 c-0.789,2.064-1.214,4.299-1.214,6.643v457.91c0,10.371,8.416,18.787,18.787,18.787h242.374c10.372,0,18.788-8.416,18.788-18.787 V27.045C395.975,16.674,387.559,8.258,377.187,8.258z M279.979,24.247h16c2.209,0,4,1.791,4,4s-1.791,4-4,4h-16 c-2.209,0-4-1.791-4-4S277.77,24.247,279.979,24.247z M215.979,24.247h40c2.209,0,4,1.791,4,4s-1.791,4-4,4h-40 c-2.209,0-4-1.791-4-4S213.77,24.247,215.979,24.247z M379.978,441.777c0,3.574-2.896,6.471-6.47,6.471h-235.06 c-3.573,0-6.471-2.896-6.471-6.471V62.718c0-3.573,2.897-6.471,6.471-6.471h235.06c3.573,0,6.47,2.897,6.47,6.471V441.777z"/>
                    <path id="transaction"d="M276.685 118.254c-2.932-2.073-6.987-1.377-9.06 1.554l-17.217 24.345-6.385-5.232c-2.775-2.275-6.872-1.868-9.148.908-2.273 2.777-1.867 6.873.91 9.147l11.783 9.654c1.168.958 2.626 1.473 4.119 1.473.289 0 .581-.02.871-.059 1.788-.242 3.395-1.216 4.436-2.688l21.244-30.042C280.312 124.383 279.615 120.326 276.685 118.254zM274.393 190.14c.492 0 .992-.091 1.478-.284 6.757-2.688 12.8-6.649 17.962-11.777 1.567-1.557 1.576-4.09.02-5.657-1.559-1.567-4.092-1.576-5.656-.019-4.393 4.362-9.534 7.733-15.282 10.02-2.053.816-3.056 3.143-2.239 5.195C271.299 189.186 272.803 190.14 274.393 190.14z"/>
                    <path id="transaction" d="M255.932 193.657c2.209 0 4-1.791 4-4s-1.791-4-4-4c-25.101 0-45.521-20.188-45.521-45 0-24.813 20.421-45 45.521-45 25.1 0 45.521 20.187 45.521 45 0 6.173-1.24 12.151-3.686 17.769-.882 2.025.046 4.382 2.071 5.264 2.024.883 4.382-.045 5.265-2.07 2.886-6.631 4.35-13.684 4.35-20.962 0-29.225-24.009-53-53.521-53s-53.521 23.775-53.521 53C202.41 169.881 226.42 193.657 255.932 193.657zM348.264 225.35H163.845c-4.421 0-8.005 3.584-8.005 8.005s3.584 8.005 8.005 8.005h16.166v175.071c.585-.956 1.881-1.378 2.965-.741l9.28 5.43c.68.4 1.52.4 2.199 0l11.45-6.711c.681-.389 1.521-.389 2.2 0l11.461 6.711c.68.4 1.52.4 2.199 0l11.45-6.711c.68-.389 1.521-.389 2.2 0l11.449 6.711c.681.4 1.521.4 2.201 0l11.459-6.711c.68-.389 1.521-.389 2.2 0l11.46 6.711c.68.4 1.52.4 2.2 0l11.45-6.711c.68-.389 1.52-.389 2.2 0l11.47 6.721c.189.109.394.18.602.229.219-.049.434-.121.633-.238l11.45-6.711c.68-.389 1.521-.389 2.2 0l11.46 6.711c.68.4 1.52.4 2.2 0l2.039-1.195V241.359h16.174c4.42 0 8.004-3.584 8.004-8.005S352.684 225.35 348.264 225.35zM303.03 261.455c0 2.209-1.79 4-4 4s-4-1.791-4-4c0-2.211 1.79-4 4-4S303.03 259.244 303.03 261.455zM285.84 261.455c0 2.209-1.789 4-4 4-2.209 0-4-1.791-4-4 0-2.211 1.791-4 4-4C284.051 257.455 285.84 259.244 285.84 261.455zM268.65 261.455c0 2.209-1.79 4-4 4-2.211 0-4-1.791-4-4 0-2.211 1.789-4 4-4C266.86 257.455 268.65 259.244 268.65 261.455zM251.461 261.455c0 2.209-1.79 4-4 4s-4-1.791-4-4c0-2.211 1.79-4 4-4S251.461 259.244 251.461 261.455zM217.08 261.455c0 2.209-1.789 4-4 4-2.21 0-4-1.791-4-4 0-2.211 1.79-4 4-4C215.291 257.455 217.08 259.244 217.08 261.455zM193.061 264.285c-.19-.19-.35-.391-.5-.61-.14-.22-.27-.45-.371-.69-.1-.24-.169-.49-.219-.75-.061-.26-.08-.52-.08-.779s.02-.521.08-.78c.05-.261.119-.511.219-.75.102-.24.231-.47.371-.69.15-.22.31-.42.5-.609.75-.74 1.779-1.17 2.83-1.17 1.049 0 2.08.43 2.83 1.17.74.75 1.17 1.779 1.17 2.83 0 1.049-.43 2.08-1.17 2.83-.75.739-1.781 1.17-2.83 1.17C194.84 265.455 193.801 265.024 193.061 264.285zM214.328 337.475v7.911h-7.59v-7.905c-7.142-1.102-11.273-5.448-11.756-11.523H204c.687 3.205 3.104 5.174 6.741 5.174 4.505 0 5.851-2.168 5.851-4.566 0-3.006-1.595-4.461-7.271-6.121-10.435-3.07-13.494-6.948-13.494-12.791 0-6.346 4.588-10.256 10.5-11.37v-6.942h7.538v6.898c7.564 1.183 10.407 5.846 10.845 10.841h-9.021c-.413-1.712-1.152-4.501-5.817-4.501-3.787 0-4.937 2.248-4.937 4.168 0 2.656 1.416 3.852 8.021 5.768 9.16 2.618 12.699 6.365 12.699 12.965C225.653 332.565 221.098 336.447 214.328 337.475zM230.271 265.455c-2.21 0-4-1.791-4-4 0-2.211 1.79-4 4-4s4 1.789 4 4C234.271 263.664 232.48 265.455 230.271 265.455zM315.314 369.672h-68.571c-2.209 0-4-1.791-4-4s1.791-4 4-4h68.571c2.209 0 4 1.791 4 4S317.523 369.672 315.314 369.672zM242.743 341.719c0-2.209 1.791-4 4-4h36.276c2.209 0 4 1.791 4 4s-1.791 4-4 4h-36.276C244.534 345.719 242.743 343.928 242.743 341.719zM315.314 345.719h-15.378c-2.209 0-4-1.791-4-4s1.791-4 4-4h15.378c2.209 0 4 1.791 4 4S317.523 345.719 315.314 345.719zM315.314 321.205h-68.571c-2.209 0-4-1.791-4-4s1.791-4 4-4h68.571c2.209 0 4 1.791 4 4S317.523 321.205 315.314 321.205zM315.314 297.252h-68.571c-2.209 0-4-1.791-4-4s1.791-4 4-4h68.571c2.209 0 4 1.791 4 4S317.523 297.252 315.314 297.252zM320.141 262.234c-.051.26-.13.51-.23.75-.1.24-.221.471-.369.69-.141.22-.311.42-.49.61-.75.739-1.78 1.17-2.83 1.17-.26 0-.521-.03-.781-.08-.259-.051-.509-.131-.75-.23-.239-.1-.469-.22-.688-.359-.221-.15-.431-.32-.61-.5-.74-.74-1.17-1.781-1.17-2.83 0-.26.02-.521.08-.78.05-.261.12-.511.22-.75.1-.24.23-.47.37-.69.15-.22.32-.42.5-.609.18-.18.39-.351.61-.49.22-.15.449-.27.688-.37.241-.101.491-.181.75-.229 1.301-.261 2.681.16 3.611 1.09.74.75 1.17 1.779 1.17 2.83C320.221 261.715 320.189 261.975 320.141 262.234z"/>
                </svg>
                <h3 class="services__title">Easy to Pay</h3>
                   <p class="services__description">We offer our clients excellent quality services for many years, with the best service in the city.</p>
            </div>
            <div class="services__content">
                <svg version="1.1" id="Capa_1" class="services__img" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="80px" height="80px" viewBox="0 0 98.906 98.906" style="enable-background:new 0 0 98.906 98.906;" xml:space="preserve">
                    <g>
                        <g>
                            <path d="M44.625,5.585h0.796c0.555,0,1-0.448,1-1c0-0.552-0.445-1-1-1h-0.796c-0.553,0-1,0.448-1,1 C43.625,5.138,44.072,5.585,44.625,5.585z"/>
                            <path d="M47.438,5.585h6.248c0.555,0,1-0.448,1-1c0-0.552-0.445-1-1-1h-6.248c-0.553,0-1,0.448-1,1 C46.438,5.138,46.888,5.585,47.438,5.585z"/> 
                            <path d="M49.454,56.303c-1.9,0-3.449,1.547-3.449,3.449s1.549,3.449,3.449,3.449c1.902,0,3.449-1.547,3.449-3.451 C52.902,57.848,51.355,56.303,49.454,56.303z M49.454,61.201c-0.799,0-1.449-0.65-1.449-1.451c0-0.799,0.65-1.449,1.449-1.449 c0.798,0,1.449,0.65,1.449,1.449C50.902,60.551,50.252,61.201,49.454,61.201z"/>
                            <path d="M70.697,10.914c-0.492-0.253-1.094-0.057-1.348,0.433c-0.018,0.031-0.018,0.065-0.025,0.097V1c0-0.552-0.447-1-1-1H30.387 c-0.555,0-1,0.448-1,1v10.149c-0.299-0.326-0.772-0.442-1.187-0.229C12.596,18.943,2.898,34.818,2.898,52.352 c0,25.67,20.885,46.555,46.555,46.555c20.083,0,37.236-12.785,43.751-30.643c0.209-0.184,0.293-0.434,0.271-0.807 c1.633-4.736,2.531-9.816,2.531-15.105C96.009,34.812,86.309,18.935,70.697,10.914z M69.783,12.695 c14.941,7.676,24.226,22.871,24.226,39.656c0,4.019-0.543,7.91-1.546,11.617c-0.534-1.089-1.303-1.824-2.301-2.188 c-1.432-0.522-2.965-0.111-3.985,0.315c-0.394-0.963-1.021-1.716-1.886-2.246c-1.844-1.136-4.244-0.873-5.448-0.64 c-0.91-1.295-2.087-2.104-3.5-2.405c-2.25-0.483-4.513,0.478-5.75,1.155l-0.302-0.543c0.011-0.053,0.033-0.103,0.033-0.155v-4.019 c2.215-0.463,3.883-2.431,3.883-4.779c0-1.423-0.621-2.694-1.596-3.587c0.975-0.893,1.596-2.164,1.596-3.587 c0-1.663-0.838-3.13-2.11-4.013c1.272-0.882,2.11-2.349,2.11-4.012c0-1.423-0.621-2.694-1.596-3.587 c0.975-0.893,1.596-2.164,1.596-3.587c0-2.35-1.668-4.316-3.883-4.779v-9.141C69.41,12.39,69.561,12.579,69.783,12.695z M69.707,28.609c-0.129-0.038-0.252-0.091-0.383-0.119v-5.089c1.096,0.409,1.883,1.457,1.883,2.694 C71.207,27.181,70.597,28.117,69.707,28.609z M71.207,33.268c0,1.237-0.787,2.286-1.883,2.694v-5.089 c0.133-0.028,0.254-0.081,0.383-0.119C70.597,31.245,71.207,32.182,71.207,33.268z M69.707,43.807 c-0.129-0.038-0.25-0.091-0.383-0.119v-5.09c1.096,0.409,1.883,1.457,1.883,2.695C71.207,42.38,70.597,43.316,69.707,43.807z M71.207,48.468c0,1.237-0.787,2.286-1.883,2.694v-5.089c0.133-0.028,0.254-0.081,0.383-0.119 C70.597,46.445,71.207,47.381,71.207,48.468z M31.387,2h35.938v51.852l-2.283-4.138V7.473c0-0.552-0.446-1-1-1H34.866 c-0.553,0-1,0.448-1,1v46.9c0,0.553,0.447,1,1,1h18.52l3.743,8.357H31.387V2z M51.902,35.119c1.428,0,2.588,1.161,2.588,2.587 c0,1.427-1.16,2.587-2.588,2.587s-2.587-1.161-2.587-2.587C49.315,36.28,50.475,35.119,51.902,35.119z M57.244,35.582 c-0.008-0.014-0.021-0.021-0.028-0.035c-0.009-0.013-0.009-0.028-0.017-0.04c-0.875-1.303-2.207-2.188-3.748-2.491 c-1.541-0.304-3.106,0.012-4.411,0.888c-2.656,1.785-3.387,5.375-1.665,8.056l5.115,11.413H35.866v-44.9h27.175V46.09 L57.244,35.582z M29.114,12.7c0.107-0.055,0.193-0.133,0.271-0.216v10.869c-1.359-0.517-3.524-0.927-6.349-0.112 c-0.351,0.102-0.618,0.385-0.696,0.741c-0.008,0.028-0.656,2.89-1.848,6.64c-1.541,4.857-4.058,11.444-7.299,15.236 c-6.027,7.047-4.612,23.436-4.52,24.413c-2.419-5.488-3.774-11.547-3.774-17.92C4.898,35.571,14.18,20.376,29.114,12.7z M26.262,24.79c-0.094,1.52-0.506,3.92-1.808,4.916c-0.467,0.358-1.04,0.494-1.719,0.443c0.717-2.353,1.194-4.224,1.416-5.132 C24.934,24.836,25.63,24.784,26.262,24.79z M8.953,70.885c0.186,0.195,0.437,0.322,0.718,0.322c0.031,0,0.063-0.002,0.097-0.004 c0.551-0.053,0.954-0.541,0.899-1.09c-0.015-0.164-1.486-16.48,4.047-22.956c3.265-3.817,5.786-10.125,7.402-15.054 c0.309,0.049,0.605,0.074,0.896,0.074c1.002,0,1.893-0.294,2.657-0.882c1.947-1.49,2.448-4.517,2.574-6.226 c0.509,0.152,0.885,0.331,1.143,0.474V38.03c-2.224,8.831-0.488,13.67,0,14.776V64.73c0,0.008,0.004,0.014,0.004,0.021 s-0.004,0.015-0.003,0.021c0.002,0.063,0.211,6.435-3.605,8.216c-0.501,0.233-0.717,0.83-0.482,1.33 c0.171,0.362,0.529,0.575,0.906,0.575c0.144,0,0.285-0.028,0.422-0.094c3.973-1.854,4.645-6.88,4.745-9.065h19.34 c-4.823,6.079-17.335,22.182-18.877,27.532C21.724,88.895,13.544,80.879,8.953,70.885z M33.69,94.016 c0.337-3.209,11.974-18.777,19.579-28.285h4.6c0.051,0,0.097-0.021,0.146-0.027l0.938,2.1L55,71.247 c-0.045,0.039-0.086,0.082-0.123,0.129c-0.108,0.138-2.647,3.414-0.147,9.66c1.871,4.676,5.47,11.547,6.867,14.176 c-3.864,1.095-7.933,1.694-12.143,1.694C43.905,96.906,38.597,95.877,33.69,94.016z M63.543,94.609 c-1.211-2.266-5.055-9.564-6.957-14.318c-1.895-4.73-0.454-7.213-0.188-7.611l3.41-2.973l2.326,5.189 c0.166,0.373,0.527,0.592,0.91,0.592c0.139,0,0.275-0.027,0.408-0.088c0.504-0.225,0.729-0.816,0.502-1.32l-9.002-20.094v-0.002 l-5.583-12.458c0.728,0.483,1.597,0.768,2.532,0.768c2.342,0,4.256-1.769,4.531-4.037l6.605,11.976v0.26 c0,0.433,0.272,0.789,0.656,0.933l0.901,1.635c-0.308-0.209-0.713-0.246-1.058-0.049l-4.182,2.392 c-0.479,0.272-0.646,0.885-0.371,1.362c0.187,0.321,0.521,0.504,0.867,0.504c0.168,0,0.34-0.043,0.494-0.133l4.184-2.392 c0.336-0.19,0.506-0.549,0.49-0.91l1.462,2.648c-0.237-0.039-0.491,0-0.709,0.145l-4.382,2.89 c-0.461,0.306-0.588,0.925-0.283,1.386c0.191,0.293,0.512,0.448,0.836,0.448c0.188,0,0.381-0.054,0.551-0.164l4.381-2.89 c0.175-0.112,0.281-0.278,0.355-0.456l2.594,4.698c0.185,0.332,0.521,0.519,0.877,0.519c0.162,0,0.328-0.039,0.48-0.125 c0.48-0.269,0.658-0.875,0.395-1.356l-1.022-1.854c0.978-0.535,2.744-1.306,4.36-0.957c1.07,0.229,1.92,0.914,2.595,2.086 c0.229,0.401,0.713,0.591,1.151,0.461c0.027-0.01,2.84-0.827,4.58,0.248c0.707,0.438,1.142,1.144,1.316,2.151 c0.059,0.33,0.275,0.609,0.586,0.742c0.307,0.138,0.66,0.104,0.943-0.076c0.535-0.348,2.193-1.151,3.385-0.715 c0.48,0.181,0.877,0.57,1.18,1.168c-0.146,0.25-0.182,0.563-0.066,0.854c0.3,0.791,0.531,1.396,0.75,1.854 C86.709,80.27,76.427,90.303,63.543,94.609z"/>
                        </g>
                    </g>
                </svg>
                <h3 class="services__title">Available everywhere</h3>
                   <p class="services__description">We offer our clients excellent quality services for many years, with the best service in the city.</p>
            </div>
            <div class="services__content">
                <svg id="transaction" class="services__img" xmlns="http://www.w3.org/2000/svg" width="80" height="80" enable-background="new 0 0 512 512" viewBox="0 0 512 512"><path d="M192.075,144.144c-24.22,0-43.86,19.641-43.86,43.87c0,11.271,4.25,21.561,11.25,29.32 c5.561-12.471,18.07-21.16,32.61-21.16s27.05,8.689,32.62,21.16c7-7.76,11.25-18.05,11.25-29.32 C235.945,163.784,216.305,144.144,192.075,144.144z M192.076,189.414c-7.78,0-14.088-6.307-14.088-14.088 c0-7.78,6.308-14.088,14.088-14.088s14.088,6.308,14.088,14.088C206.164,183.107,199.856,189.414,192.076,189.414z"/>
                    <circle cx="319.928" cy="310.428" r="14.088"/>
                    <path d="M319.928,366.975c12.949,0,24.6-5.61,32.619-14.54c-5.57-12.47-18.08-21.16-32.619-21.16 c-14.541,0-27.051,8.69-32.61,21.16C295.337,361.364,306.977,366.975,319.928,366.975z"/>
                    <path d="M468.16,151.956h-72.094V27.045c0-10.371-8.416-18.787-18.787-18.787H134.904c-4.566,0-8.768,1.627-12.022,4.348 c-2.465,2.053-4.396,4.736-5.55,7.797c-0.789,2.064-1.215,4.299-1.215,6.643v262.533H43.84c-4.418,0-8,3.582-8,8v56.11 c0,4.418,3.582,8,8,8h72.277v123.267c0,10.371,8.416,18.787,18.787,18.787h242.375c10.371,0,18.787-8.416,18.787-18.787V224.066 h72.094c4.418,0,8-3.582,8-8v-56.11C476.16,155.538,472.578,151.956,468.16,151.956z M280.07,24.165h16c2.209,0,4,1.791,4,4 s-1.791,4-4,4h-16c-2.209,0-4-1.791-4-4S277.861,24.165,280.07,24.165z M216.07,24.165h40c2.209,0,4,1.791,4,4s-1.791,4-4,4h-40 c-2.209,0-4-1.791-4-4S213.861,24.165,216.07,24.165z M56.059,305.375h102.525c2.209,0,4,1.791,4,4s-1.791,4-4,4H56.059 c-2.209,0-4-1.791-4-4S53.85,305.375,56.059,305.375z M162.584,325.633c0,2.209-1.791,4-4,4H94.911c-2.209,0-4-1.791-4-4 s1.791-4,4-4h63.673C160.793,321.633,162.584,323.424,162.584,325.633z M56.059,321.633h17.585c2.209,0,4,1.791,4,4s-1.791,4-4,4 H56.059c-2.209,0-4-1.791-4-4S53.85,321.633,56.059,321.633zM56.059,345.891c-2.209,0-4-1.791-4-4s1.791-4,4-4h102.525 c2.209,0,4,1.791,4,4s-1.791,4-4,4H56.059z M256.056,484.229c-5.365,0-9.716-4.35-9.716-9.716c0-5.365,4.351-9.715,9.716-9.715 c5.366,0,9.716,4.35,9.716,9.715C265.771,479.879,261.422,484.229,256.056,484.229z M380.075,441.696c0,3.569-2.9,6.47-6.47,6.47 H138.545c-3.58,0-6.47-2.9-6.47-6.47v-80.008h95.908c4.418,0,8-3.582,8-8v-9.985c0-2.858,1.524-5.499,4-6.928l14.937-8.623 c2.258-1.305,2.219-4.578-0.072-5.826l-14.693-8.01c-2.571-1.401-4.171-4.096-4.171-7.023v-9.715c0-4.418-3.582-8-8-8h-95.908 V62.636c0-3.569,2.89-6.47,6.47-6.47h235.061c3.569,0,6.47,2.9,6.47,6.47v89.32h-96.059c-4.418,0-8,3.582-8,8v9.715 c0,2.928-1.6,5.622-4.171,7.024l-14.693,8.01c-2.29,1.248-2.33,4.521-0.072,5.825l14.937,8.623c2.476,1.429,4,4.07,4,6.929v9.984 c0,4.418,3.582,8,8,8h96.059V441.696z M182.428,326.407c1.648-1.467,4.177-1.321,5.647,0.329l4.752,5.339l15.72-21.846 c1.291-1.795,3.79-2.202,5.583-0.911c1.794,1.291,2.201,3.79,0.911,5.583L196.405,340.8c-0.709,0.985-1.828,1.596-3.04,1.659 c-0.069,0.003-0.139,0.005-0.207,0.005c-1.139,0-2.227-0.485-2.988-1.341l-8.071-9.068 C180.63,330.404,180.777,327.876,182.428,326.407z M315.488,193.195v1.592c0,2.209-1.791,4-4,4s-4-1.791-4-4v-1.592 c0-3.701,2.021-7.097,5.273-8.861l3.509-1.905c1.616-0.877,2.62-2.564,2.62-4.403v-1.248c0-2.763-2.248-5.011-5.011-5.011h-2.128 c-2.763,0-5.01,2.248-5.01,5.011c0,2.209-1.791,4-4,4s-4-1.791-4-4c0-7.174,5.836-13.011,13.01-13.011h2.128 c7.174,0,13.011,5.837,13.011,13.011v1.248c0,4.775-2.607,9.157-6.804,11.435l-3.51,1.905 C315.905,191.729,315.488,192.431,315.488,193.195z M315.608,207.392v0.978c0,2.209-1.791,4-4,4s-4-1.791-4-4v-0.978 c0-2.209,1.791-4,4-4S315.608,205.183,315.608,207.392z M455.941,208.27H353.416c-2.209,0-4-1.791-4-4s1.791-4,4-4h102.525 c2.209,0,4,1.791,4,4S458.15,208.27,455.941,208.27z M349.416,188.011c0-2.209,1.791-4,4-4h63.673c2.209,0,4,1.791,4,4 s-1.791,4-4,4h-63.673C351.207,192.011,349.416,190.22,349.416,188.011z M455.941,192.011h-17.585c-2.209,0-4-1.791-4-4 s1.791-4,4-4h17.585c2.209,0,4,1.791,4,4S458.15,192.011,455.941,192.011z M455.941,175.753H353.416c-2.209,0-4-1.791-4-4 s1.791-4,4-4h102.525c2.209,0,4,1.791,4,4S458.15,175.753,455.941,175.753z"/>
                    <circle cx="256.383" cy="93.549" r="6.413"/>
                    <circle cx="224.695" cy="93.549" r="6.413"/>
                    <circle cx="288.07" cy="93.549" r="6.413"/>
                    <circle cx="256.383" cy="417.307" r="6.414"/>
                    <circle cx="224.695" cy="417.307" r="6.414"/>
                    <circle cx="288.07" cy="417.307" r="6.414"/>
                </svg>
                <h3 class="services__title">High quality Service</h3>
                <p class="services__description">We offer our clients excellent quality services for many years, with the best service in the city.</p>
            </div>
        </div>
    </section>

    <!-- FEATURED PLACES -->
    <section class="menu section bd-container" id="menu">
        <span class="section-subtitle">Featured</span>
        <h2 class="section-title">Most visited places in Cagayan</h2>

        <div class="menu__container bd-grid">
             <div class="menu__content">
                 <img src="{{ asset('assets/place1.png') }}" alt="" class="menu__img">
                <h3 class="menu__name">Tayid Lighthouse </h3>
                <span class="menu__detail">Famous Lighthouse</span>
                <a href="#" class="button menu__button"><span class="iconify" data-icon="mdi:van-passenger" data-width="20" data-height="20"></span></a>
             </div>
             <div class="menu__content">
                 <img src="{{ asset('assets/place1.png') }}" alt="" class="menu__img">
                <h3 class="menu__name">Tayid Lighthouse </h3>
                <span class="menu__detail">Famous Lighthouse</span>
                <a href="#" class="button menu__button"><span class="iconify" data-icon="mdi:van-passenger" data-width="20" data-height="20"></span></a>
            </div>
           
             <div class="menu__content">
                 <img src="{{ asset('assets/place1.png') }}" alt="" class="menu__img">
                <h3 class="menu__name">Tayid Lighthouse </h3>
                <span class="menu__detail">Famous Lighthouse</span>
                <a href="#" class="button menu__button"><span class="iconify" data-icon="mdi:van-passenger" data-width="20" data-height="20"></span></a>
             </div>
           </div>
    </section>

    <!-- APP -->
    <section class="app section bd-container">
        <div class="app__container bd-grid">
            <div class="app__data">
                <span class="section-subtitle app__initial">App</span>
                    <h2 class="section-title app__initial">App will be available soon</h2>
                    <p class="app__description">Our application will be available soon! With VanGo, renting van and reservation made easier! You can transact with just a tap</p>
                <div class="app__stores">
                    <a href="#"><img src="assets/img/app1.png" alt="" class="app__store"></a>
                    <a href="#"><img src="assets/img/app2.png" alt="" class="app__store"></a>
                </div>
            </div>
            <img src="{{ asset('assets/mockup1.png') }}" alt="" class="app__img">
        </div>
    </section>

    <!-- CONTACT -->
    <section class="contact section bd-container" id="contact">
        <div class="contact__container cnt bd-grid">
            <div class="contact__data">
                <span class="section-subtitle contact__initial">Let's talk</span>
                <h2 class="section-title contact__initial">Contact us</h2>
                <p class="contact__description">If you want to reserve a table in our restaurant, contact us and we will attend you quickly, with our 24/7 chat service.</p>
            </div>
            <div class="contact__button">
                <a href="#" class="button">Contact us now</a>
            </div>
        </div>
    </section>
</main>

<!-- Footer -->
<footer class="footer section bd-container">
    <div class="footer__container bd-grid">
        <div class="footer__content">
            <h1 class="home__title_ footer-title">Van<mark style="background: none;color: "class="vango">Go</mark></h1>
               <span class="footer__description">Online Van Reservation</span>
            <div>
                <a href="#" class="footer__social"><i class='bx bxl-facebook'></i></a>
                 <a href="#" class="footer__social"><i class='bx bxl-instagram'></i></a>
                <a href="#" class="footer__social"><i class='bx bxl-twitter'></i></a>
            </div>
        </div>
           <div class="footer__content">
            <h3 class="footer__title">Services</h3>
            <ul>
                <li><a href="#" class="footer__link">Delivery</a></li>
                <li><a href="#" class="footer__link">Pricing</a></li>
                <li><a href="#" class="footer__link">Rent Van</a></li>
                <li><a href="#" class="footer__link">Reserve your spot</a></li>
            </ul>
        </div>
        <div class="footer__content">
            <h3 class="footer__title">Information</h3>
            <ul>
               <li><a href="#" class="footer__link">Event</a></li>
               <li><a href="#" class="footer__link">Contact us</a></li>
                <li><a href="#" class="footer__link">Privacy policy</a></li>
                <li><a href="#" class="footer__link">Terms of services</a></li>
            </ul>
        </div>
        <div class="footer__content ">
           <h3 class="footer__title">Contact</h3>
            <ul class="companyinformation">
                <li>Terminal Address</li>
                <li>Telephone Number</li>
                <li>Phone Number</li>
                <li>vango@email.com</li>
            </ul>
        </div>
    </div>
    <p class="footer__copy">&#169; 2022 Team OVRS. All right reserved</p>
</footer>

<!-- Script -->
<script src="https://unpkg.com/scrollreveal"></script>
<script src="../js/main.js"></script>
    
@endsection

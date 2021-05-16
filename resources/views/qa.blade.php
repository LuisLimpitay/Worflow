
<x-app-layout>

    <br>

    <head>
        <title>QA</title>
        <link href="https://cdn.jsdelivr.net/npm/tailwindcss/dist/tailwind.min.css" rel="stylesheet">
        <style>
            /* Tab content - closed */
            .tab-content {
                max-height: 0;
                -webkit-transition: max-height .35s;
                -o-transition: max-height .35s;
                transition: max-height .35s;
            }

            /* :checked - resize to full height */
            .tab input:checked~.tab-content {
                max-height: 100vh;
            }

            /* Label formatting when open */
            .tab input:checked+label {
                /*@apply text-xl p-5 border-l-2 border-indigo-500 bg-gray-100 text-indigo*/
                font-size: 1.25rem;
                /*.text-xl*/
                padding: 1.25rem;
                /*.p-5*/
                border-left-width: 2px;
                /*.border-l-2*/
                border-color: #6574cd;
                /*.border-indigo*/
                background-color: #f8fafc;
                /*.bg-gray-100 */
                color: #6574cd;
                /*.text-indigo*/
            }

            /* Icon */
            .tab label::after {
                float: right;
                right: 0;
                top: 0;
                display: block;
                width: 1.5em;
                height: 1.5em;
                line-height: 1.5;
                font-size: 1.25rem;
                text-align: center;
                -webkit-transition: all .35s;
                -o-transition: all .35s;
                transition: all .35s;
            }

            /* Icon formatting - closed */
            .tab input[type=checkbox]+label::after {
                content: "+";
                font-weight: bold;
                /*.font-bold*/
                border-width: 1px;
                /*.border*/
                border-radius: 9999px;
                /*.rounded-full */
                border-color: #b8c2cc;
                /*.border-grey*/
            }

            .tab input[type=radio]+label::after {
                content: "\25BE";
                font-weight: bold;
                /*.font-bold*/
                border-width: 1px;
                /*.border*/
                border-radius: 9999px;
                /*.rounded-full */
                border-color: #b8c2cc;
                /*.border-grey*/
            }

            /* Icon formatting - open */
            .tab input[type=checkbox]:checked+label::after {
                transform: rotate(315deg);
                background-color: #6574cd;
                /*.bg-indigo*/
                color: #f8fafc;
                /*.text-grey-lightest*/
            }

            .tab input[type=radio]:checked+label::after {
                transform: rotateX(180deg);
                background-color: #6574cd;
                /*.bg-indigo*/
                color: #f8fafc;
                /*.text-grey-lightest*/
            }

        </style>
    </head>

    <div class="w-full md:w-3/5 mx-auto p-8">
        <p class="bg-gray-100 text-2xl fx-2 fy-2">ABRIR <strong>DE UNO A UNO</strong></p>
        <br>
        <div class="shadow-md">

            <div class="shadow-md">
                <div class="tab w-full overflow-hidden border-t">
                    <input class="absolute opacity-0" id="tab-single-one" type="radio" name="tabs2">
                    <label class="block p-5 leading-normal cursor-pointer" for="tab-single-one">Como puedo cancelar mi inscripción</label>
                    <div class="tab-content overflow-hidden border-l-2 bg-gray-100 border-indigo-500 leading-normal">
                        <p class="p-5">Si ya te inscribiste y realizaste el pago por cualquier medio deberas dirigirte a las oficinas de Workflow con un maximo de 72hs antes de la fecha del curso al cual se inscribio.</del>.</p>
                    </div>
                </div>
                <div class="tab w-full overflow-hidden border-t">
                    <input class="absolute opacity-0" id="tab-single-two" type="radio" name="tabs2">
                    <label class="block p-5 leading-normal cursor-pointer" for="tab-single-two">Label Two</label>
                    <div class="tab-content overflow-hidden border-l-2 bg-gray-100 border-indigo-500 leading-normal">
                        <p class="p-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tenetur, architecto,
                            explicabo perferendis nostrum, maxime impedit atque odit sunt pariatur illo obcaecati soluta
                            molestias iure facere dolorum adipisci eum? Saepe, itaque.</p>
                    </div>
                </div>
                <div class="tab w-full overflow-hidden border-t">
                    <input class="absolute opacity-0" id="tab-single-three" type="radio" name="tabs2">
                    <label class="block p-5 leading-normal cursor-pointer" for="tab-single-three">Label Three</label>
                    <div class="tab-content overflow-hidden border-l-2 bg-gray-100 border-indigo-500 leading-normal">
                        <p class="p-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tenetur, architecto,
                            explicabo perferendis nostrum, maxime impedit atque odit sunt pariatur illo obcaecati soluta
                            molestias iure facere dolorum adipisci eum? Saepe, itaque.</p>
                    </div>
                </div>

                <div class="tab w-full overflow-hidden border-t">
                    <input class="absolute opacity-0" id="tab-single-four" type="radio" name="tabs2">
                    <label class="block p-5 leading-normal cursor-pointer" for="tab-single-four">Label four</label>
                    <div class="tab-content overflow-hidden border-l-2 bg-gray-100 border-indigo-500 leading-normal">
                        <p class="p-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tenetur, architecto,
                            explicabo perferendis nostrum, maxime impedit atque odit sunt pariatur illo obcaecati soluta
                            molestias iure facere dolorum adipisci eum? Saepe, itaque.</p>
                    </div>
                </div>

                <div class="tab w-full overflow-hidden border-t">
                    <input class="absolute opacity-0" id="tab-single-five" type="radio" name="tabs2">
                    <label class="block p-5 leading-normal cursor-pointer" for="tab-single-five">Label five</label>
                    <div class="tab-content overflow-hidden border-l-2 bg-gray-100 border-indigo-500 leading-normal">
                        <p class="p-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tenetur, architecto,
                            explicabo perferendis nostrum, maxime impedit atque odit sunt pariatur illo obcaecati soluta
                            molestias iure facere dolorum adipisci eum? Saepe, itaque.</p>
                    </div>
                </div>

                <div class="tab w-full overflow-hidden border-t">
                    <input class="absolute opacity-0" id="tab-single-six" type="radio" name="tabs2">
                    <label class="block p-5 leading-normal cursor-pointer" for="tab-single-six">Label six</label>
                    <div class="tab-content overflow-hidden border-l-2 bg-gray-100 border-indigo-500 leading-normal">
                        <p class="p-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tenetur, architecto,
                            explicabo perferendis nostrum, maxime impedit atque odit sunt pariatur illo obcaecati soluta
                            molestias iure facere dolorum adipisci eum? Saepe, itaque.</p>
                    </div>
                </div>

                <div class="tab w-full overflow-hidden border-t">
                    <input class="absolute opacity-0" id="tab-single-seven" type="radio" name="tabs2">
                    <label class="block p-5 leading-normal cursor-pointer" for="tab-single-seven">Label seven</label>
                    <div class="tab-content overflow-hidden border-l-2 bg-gray-100 border-indigo-500 leading-normal">
                        <p class="p-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tenetur, architecto,
                            explicabo perferendis nostrum, maxime impedit atque odit sunt pariatur illo obcaecati soluta
                            molestias iure facere dolorum adipisci eum? Saepe, itaque.</p>
                    </div>
                </div>

                <div class="tab w-full overflow-hidden border-t">
                    <input class="absolute opacity-0" id="tab-single-eigth" type="radio" name="tabs2">
                    <label class="block p-5 leading-normal cursor-pointer" for="tab-single-eigth">Label eigth</label>
                    <div class="tab-content overflow-hidden border-l-2 bg-gray-100 border-indigo-500 leading-normal">
                        <p class="p-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tenetur, architecto,
                            explicabo perferendis nostrum, maxime impedit atque odit sunt pariatur illo obcaecati soluta
                            molestias iure facere dolorum adipisci eum? Saepe, itaque.</p>
                    </div>
                </div>

            </div>

        </div>
    </div>

    {{-- *************************************SEPARADOR****************************************************** --}}

    <div class="w-full md:w-3/5 mx-auto p-8">
        <p>Abrir <strong>MULTIPLE</strong></p>
        <div class="shadow-md">

            <div class="tab w-full overflow-hidden border-t">
                <input class="absolute opacity-0 " id="tab-multi-one" type="checkbox" name="tabs">
                <label class="block p-5 leading-normal cursor-pointer" for="tab-multi-one">Label One</label>
                <div class="tab-content overflow-hidden border-l-2 bg-gray-100 border-indigo-500 leading-normal">
                    <p class="p-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tenetur, architecto,
                        explicabo perferendis nostrum, maxime impedit atque odit sunt pariatur illo obcaecati soluta
                        molestias iure facere dolorum adipisci eum? Saepe, itaque.</p>
                </div>
            </div>

            <div class="tab w-full overflow-hidden border-t">
                <input class="absolute opacity-0" id="tab-multi-two" type="checkbox" name="tabs">
                <label class="block p-5 leading-normal cursor-pointer" for="tab-multi-two">Label Two</label>
                <div class="tab-content overflow-hidden border-l-2 bg-gray-100 border-indigo-500 leading-normal">
                    <p class="p-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tenetur, architecto,
                        explicabo perferendis nostrum, maxime impedit atque odit sunt pariatur illo obcaecati soluta
                        molestias iure facere dolorum adipisci eum? Saepe, itaque.</p>
                </div>
            </div>

            <div class="tab w-full overflow-hidden border-t">
                <input class="absolute opacity-0" id="tab-multi-three" type="checkbox" name="tabs">
                <label class="block p-5 leading-normal cursor-pointer" for="tab-multi-three">Label Three</label>
                <div class="tab-content overflow-hidden border-l-2 bg-gray-100 border-indigo-500 leading-normal">
                    <p class="p-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tenetur, architecto,
                        explicabo perferendis nostrum, maxime impedit atque odit sunt pariatur illo obcaecati soluta
                        molestias iure facere dolorum adipisci eum? Saepe, itaque.</p>
                </div>
            </div>

        </div>
    </div>


    <script>
        /* Optional Javascript to close the radio button version by clicking it again */
        var myRadios = document.getElementsByName('tabs2');
        var setCheck;
        var x = 0;
        for (x = 0; x < myRadios.length; x++) {
            myRadios[x].onclick = function() {
                if (setCheck != this) {
                    setCheck = this;
                } else {
                    this.checked = false;
                    setCheck = null;
                }
            };
        }

    </script>


</x-app-layout>

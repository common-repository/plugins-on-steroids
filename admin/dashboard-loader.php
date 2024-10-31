<section class="container-full mt-6 flex w-full h-screen justify-center bg-white" x-show="!ready">
    <div class="self-center flex flex-col">
        <svg class=" self-center w-30" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" style="width:7.5rem; margin:auto; display:block;" viewBox="0 0 100 100" preserveAspectRatio="xMidYMid">
            <defs>
                <path id="path" d="M50 15A15 35 0 0 1 50 85A15 35 0 0 1 50 15" fill="none"></path>
                <path id="patha" d="M0 0A15 35 0 0 1 0 70A15 35 0 0 1 0 0" fill="none"></path>
            </defs>
            <g transform="rotate(0 50 50)">
                <use xlink:href="#path" stroke="#f1f2f3" stroke-width="3"></use>
            </g>
            <g transform="rotate(60 50 50)">
                <use xlink:href="#path" stroke="#f1f2f3" stroke-width="3"></use>
            </g>
            <g transform="rotate(120 50 50)">
                <use xlink:href="#path" stroke="#f1f2f3" stroke-width="3"></use>
            </g>
            <g transform="rotate(0 50 50)">
                <circle cx="50" cy="15" r="9" fill="#e15b64">
                    <animateMotion dur="1s" repeatCount="indefinite" begin="0s">
                        <mpath xlink:href="#patha"></mpath>
                    </animateMotion>
                </circle>
            </g>
            <g transform="rotate(60 50 50)">
                <circle cx="50" cy="15" r="9" fill="#f8b26a">
                    <animateMotion dur="1s" repeatCount="indefinite" begin="-0.16666666666666666s">
                        <mpath xlink:href="#patha"></mpath>
                    </animateMotion>
                </circle>
            </g>
            <g transform="rotate(120 50 50)">
                <circle cx="50" cy="15" r="9" fill="#abbd81">
                    <animateMotion dur="1s" repeatCount="indefinite" begin="-0.3333333333333333s">
                        <mpath xlink:href="#patha"></mpath>
                    </animateMotion>
                </circle>
            </g>
        </svg>
    </div>
</section>
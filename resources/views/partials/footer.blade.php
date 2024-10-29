
@vite('resources/scss/footer.scss')

<footer id="footer" style="background-image: url('{{ asset('img/footer-bg.jpg') }}')">
    <section class="links">
        <div class="container">
            <div class="row">
                <div class="col-6">
                    <div class="row">
                        @foreach ($navigationSections as $section )
                        <div class="col-4 pt-5">
                            <h5 class="text-white fw-bold">
                                {{ $section['title'] }}
                            </h5>
                            <ul class="list-unstyled">
                                @foreach ( $section['links'] as $link )
                                <li>
                                    <a href="#" class=" text-secondary text-decoration-none color-none">{{ $link }}</a>
                                </li>
                                @endforeach
                            </ul>
                        </div>
                        @endforeach
                        <div class="col-12 pb-3">
                            <div class="text-secondary">
                                All Sites Content TM and © 2020 DC Entertainment, unless otherwise <span
                                    class="cursor_pointer">noted here</span>. All rights reserved.
                                <span class="cursor_pointer">Cookies Settings</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-6 h-100">
                    <img src="{{ asset('img/dc-logo-bg.png') }}" alt="img logo background">
                </div>
            </div>
        </div>
    </section>
    <section class="social bg-dark pt-5 pb-5">
        <div class="container">
            <div class="row">
                <div class="col-6">
                    <button role="button" class="border border-primary border-4 text-white bg-dark pt-2 pb-2 pe-3 ps-3">
                        SIGN-UP NOW!
                    </button>
                </div>
                <div class="col-6 d-flex justify-content-end align-items-center">
                    <h5 class="me-4 cursor_pointer">
                        FOLLOW US
                    </h5>
                    <ul class="list-unstyled d-flex">
                        @foreach ($imgSocial as $social => $img)
                        <li>
                            <a href="#"><img src="{{ $img }}" alt="{{ $social }}" class="me-3"></a>
                        </li>

                        @endforeach
                        <li></li>
                    </ul>
                </div>
            </div>
    </section>
</footer>

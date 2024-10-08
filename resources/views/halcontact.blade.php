@extends('main')
@section('content')
    <main>
        <section class="contact-us pt-5">
            <div class="container pt-4">
                <div class="row">
                    <div class="col-lg-6">
                    <div id="map">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7151.84524236698!2d-122.19494600413192!3d47.56605883252286!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x5490695e625f8965%3A0xf99b055e76477def!2sNewcastle%20Beach%20Park%20Playground%2C%20Bellevue%2C%20WA%2098006%2C%20USA!5e0!3m2!1sen!2sth!4v1644335269264!5m2!1sen!2sth" width="100%" height="360px" frameborder="0" style="border:0; border-radius: 15px; position: relative; z-index: 2;" allowfullscreen=""></iframe>
                        <div class="row">
                        <div class="col-lg-6 offset-lg-1">
                            <div class="contact-info">
                            <div class="icon">
                                <i class="fa fa-phone"></i>
                            </div>
                            <h4>Phone</h4>
                            <span>010-020-0340</span>
                            </div>
                        </div>
                        </div>
                    </div>
                    </div>
                    <div class="col-lg-6">
                        <form id="contact" action="" method="post">
                            <div class="row">
                                <div class="col-lg-12">
                                    <fieldset>
                                    <input type="name" name="name" id="name" placeholder="Nama" autocomplete="on" required>
                                    </fieldset>
                                </div>
                                <div class="col-lg-12">
                                    <fieldset>
                                    <input type="text" name="email" id="email" pattern="[^ @]*@[^ @]*" placeholder="Email" required="">
                                    </fieldset>
                                </div>
                                <div class="col-lg-12">
                                    <fieldset>
                                    <textarea name="message" id="message" placeholder="Pesan"></textarea>
                                    </fieldset>
                                </div>
                                <div class="col-lg-12">
                                    <fieldset>
                                    <button type="submit" id="form-submit" class="main-gradient-button">Kirim Pesan</button>
                                    </fieldset>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection

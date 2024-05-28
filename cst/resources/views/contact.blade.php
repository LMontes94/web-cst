@extends('layouts.landing')

@section('content')
@component('_components.inner-banner')   
 @slot('pageTitle','Contacto')
 @slot('link1Text','Home') 
 @slot('link1Url',route('index'))
 @slot('link2Text','Contacto')

@endcomponent
<!-- contact block -->
<section class="w3l-contact py-5" id="contact">
    <div class="container py-md-5 py-4">
        <div class="title-main text-center mx-auto mb-md-5 mb-4" style="max-width:500px;">
            <h3 class="title-style">Formulario de Contacto</h3>
        </div>
        <div class="row contact-block">
            <div class="col-md-7 contact-right">
                <form action="https://sendmail.w3layouts.com/submitForm" method="post" class="signin-form">
                    <div class="input-grids">
                        <div class="row">
                            <div class="col-sm-6">
                                <input type="text" name="name" id="name" placeholder="Nombre" class="contact-input" required="" />
                            </div>
                            <div class="col-sm-6">
                                <input type="text" name="apellido" id="apellido" placeholder="Apellido" class="contact-input" required="" />
                            </div>
                            <div class="col-sm-6">
                                <input type="email" name="email" id="email" placeholder="Email" class="contact-input" required="" />
                            </div>
                            <div class="col-sm-6">
                                <input type="text" name="telefeno" id="telefono" placeholder="Teléfono" class="contact-input" required="" />
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <select class="form-select" aria-label="select example">
                                <option value="0">- Destinatario -</option>
                                <option value="34">Buffet</option>
                                <option value="1">Contacto</option>
                                <option value="35">Pastoral</option>
                                <option value="21">Soporte Web</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-input">
                        <textarea name="message" id="message" placeholder="Comentario" required=""></textarea>
                    </div>
                    <div class="text-start">
                        <button class="btn btn-style btn-style-3">Enviar</button>
                    </div>
                </form>
            </div>
            <div class="col-md-5 ps-lg-5 mt-md-0 mt-5">
                <div class="contact-left">
                    <div class="cont-details">
                        <div class="d-flex contact-grid">
                            <div class="cont-left text-center me-3">
                                <i class="fas fa-building"></i>
                            </div>
                            <div class="cont-right">
                                <h6>Dirección</h6>
                                <p>Julio A. Roca 2057 - Florida Pdo. de Vicente López.</p>
                            </div>
                        </div>
                        <div class="d-flex contact-grid mt-4 pt-lg-2">
                            <div class="cont-left text-center me-3">
                                <i class="fas fa-phone-alt"></i>
                            </div>
                            <div class="cont-right">
                                <h6>Teléfono</h6>
                                <p><a href="tel:4513-6744">4513-6744/ 6745 / 6748</a></p>
                            </div>
                        </div>
                        <div class="d-flex contact-grid mt-4 pt-lg-2">
                            <div class="cont-left text-center me-3">
                                <i class="fas fa-envelope-open-text"></i>
                            </div>
                            <div class="cont-right">
                                <h6>Email</h6>
                                <p><a href="mailto:steresita@colegiosteresita.edu.ar" class="mail">steresita@colegiosteresita.edu.ar</a></p>
                            </div>
                        </div>
                        <div class="d-flex contact-grid mt-4 pt-lg-2">
                            <div class="cont-left text-center me-3">
                                <i class="fas fa-headphones-alt"></i>
                            </div>
                            <div class="cont-right">
                                <h6>Soporte Técnico</h6>
                                <p><a href="mailto:soporte@colegiosteresita.edu.ar" class="mail">soporte@colegiosteresita.edu.ar</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- map -->
<div class="map">
    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3286.9022062925924!2d-58.487409108097985!3d-34.53070555198035!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x95bcb6cb1dee8019%3A0x5ed8747383382c59!2sColegio%20Santa%20Teresita%20del%20Ni%C3%B1o%20Jes%C3%BAs!5e0!3m2!1sen!2spl!4v1715468052708!5m2!1sen!2spl" width="100%" height="350" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
</div>
<!-- //contact block -->
@endsection
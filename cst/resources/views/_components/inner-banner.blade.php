<!-- inner banner -->
<section class="inner-banner py-5 " style=" background-image: url('{{ asset($backgroundImage) }}'); background-size: cover; background-position: center; background-repeat: no-repeat;">
    <div class="w3l-breadcrumb py-lg-5">
        <div class="container pt-4 pb-sm-4">
            <div class="row align-items-center justify-content-between">
                <div class="col-md-6">
                    <h4 class="inner-text-title pt-5">{{$pageTitle}}</h4>
                    <ul class="breadcrumbs-custom-path">
                        <li><a href="{{$link1Url}}">{{$link1Text}}</a></li>
                        <li class="active"><i class="fas fa-angle-right"></i>{{$link2Text}}</li>
                    </ul>
                </div>
                <div class="col-md-3 text-end">
                    <img src="{{asset('assets/img/lema/2024/lema2024.png')}}" alt="lema2024" class="img-fluid">
                </div>
            </div>
        </div>
    </div>
</section>
<!-- //inner banner -->
<div class="w3l-grids-block-5 home-course-bg py-5" id="courses">
    <div class="container py-md-5 py-4">
        <div class="title-main text-center mx-auto mb-md-5 mb-4" style="max-width:500px;">
            <h3 class="title-style">Nuestros Niveles</h3>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-4 col-md-6">
                @component('_components.coursecard-single', [
                'image' => 'assets/images/c1.jpg',
                'route' => route('inicial'),
                'class' => '',
                'level' => 'Inicial',
                'title' => 'Nivel Inicial',
                'description' => 'La infancia se construye en tiempos pequeños y es el momento de los aprendizajes más significativos.'
                ])
                @endcomponent
            </div>
            <div class="col-lg-4 col-md-6 mt-md-0 mt-4">
                @component('_components.coursecard-single', [
                'image' => 'assets/images/c2.jpg',
                'route' => route('primaria'),
                'class' => 'sec-2',
                'level' => 'Primaria',
                'title' => 'Nivel Primario',
                'description' => 'Nuestra propuesta apunta al desarrollo integral de los alumnos para que puedan lograr confianza y autonomía.'
                ])
                @endcomponent
            </div>
            <div class="col-lg-4 col-md-6 mt-lg-0 mt-4">
                @component('_components.coursecard-single', [
                'image' => 'assets/images/c3.jpg',
                'route' => route('secundaria'),
                'class' => 'sec-3',
                'level' => 'Secundaria',
                'title' => 'Nivel Secundario',
                'description' => 'Buscamos fomentar en nuestros alumnos el pensamiento y la reflexión, el espíritu de trabajo y el deseo de saber.'
                ])
                @endcomponent
            </div>
        </div>
    </div>
</div>
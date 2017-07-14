<style>
    .ajustegraphics{
        width: auto;


    }
    .graphics{
        width: auto;
        float: left;
        padding: 20px;

    }
    .editImg img{

        padding: 50%;
    }

.Teamtitle{
    color: #2C2C33;
    font-weight:bold;
    color:#76bce6;
}
</style>
@extends('AboutUs.model')

@section('name', 'Quem Somos')

@section('active-page')
    <li class="active-page active-section open parent-level"> <a href="{{url('/about-us')}}" title="About US" class="destination">About US</a>
    </li>
@endsection

@section('main-content')
    <div class="block" data-block-id="8007">

        <h2><strong><span style="line-height: 1.5em; color: #76bce6;">About Us</span></strong></h2>
        <p style="line-height: 1.5em">
            Y-Mind is a foundation that was built by professors of UNIFESP
            (Universidade Federal of São Paulo/Federal University of Sao Paulo)
            to further extend the development of population strategies to promote mental health and
            prevent mental disorders at schools, work environment, develop strategies to treat/prevent
            people at risk of developing mental disorders, promote anti-stigma actions and influence
            policies.
            <br/><br/>
            Scientific production – more than 200 articles published in international scientific journals Several National
            and International Awards in Mental Disorders Research

            Partnership with Politics in the development of policies regarding mental health Several actions
            together with Deputada Federal Mara Gabrilli () Law – Quota for People Schizophrenia and
            severe mental disorders (Lei Brasileira de Inclusão)
        </p>
        <div class="supporting-content-item teaser type-teaser force has-image js-transform" data-id="20521" data-type="teaser">
            <h2><strong><span style="line-height: 1.5em; color: #76bce6;">Founders</span></strong></h2>
            <div class="ajustegraphics">
                <div class="graphics">
                    <img src="{{asset('/images/neuroservices/img-jair.png')}}" alt="Jair de Jesus Mari">

                    <div class="textEdit">
                        <p class="Teamtitle">Presidente<br>Prof. Titular Jair de Jesus Mari<br></p>
                    </div>
                </div>
                <div class="ajustegraphics">
                    <div class="graphics">
                        <img src="{{asset('/images/neuroservices/img-rodrigo-2.png')}}" alt="Jair de Jesus Mari">

                        <div class="textEdit">
                            <p class="Teamtitle">Vice-presidente<br>Prof. Livre-docente <br>Rodrigo Affonseca Bressan<br></p>
                        </div>
                    </div>

                </div></div>
        </div>





@endsection
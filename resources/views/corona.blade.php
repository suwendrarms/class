@extends('Public.Layouts.app')
@section('content')

<div class="page animated" style="animation-duration: 500ms;">
    <!-- Page Header-->
    <header class="page-head">

    </header>
    <!-- Modern Breadcrumbs-->
    <section class="bg-covid-image context-dark text-md-left">
        <div class="shell section-34 section-md-top-110 section-md-bottom-41">
            <h2>Covid-19</h2>
            <ul class="list-inline list-inline-arrows p offset-top-34 offset-md-top-70">
                <li><a class="text-white" href="{{ route('home') }}"></a>
                </li>

                <li class="text-white-50">
                </li>
            </ul>
            {{-- <div class="background background-image" style="background-image: url(https://cv19kit.com/wp-content/uploads/2016/11/ewscripps.brightspotcdn.jpg);max-width:100%;height:400px;filter: progid:DXImageTransform.Microsoft.AlphaImageLoader(src='https://cv19kit.com/wp-content/uploads/2016/11/ewscripps.brightspotcdn.jpg', sizingMethod='scale');" data-imgwidth="1280">
            </div> --}}
        </div>
    </section>
    <!-- Our Customers-->
    <section class="section-98 section-sm-110">
        <div class="shell">
            <div class="range range-xs-center range-md-left">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">

                            <h4 class="text-lefts">
                                <strong>සහයෝගිතාව යනු අපගේ බලවත්ම ආයුධයකි</strong>
                            </h4>
                            <h5>
                                2019 දෙසැම්බර් 31 වන දින චීනයේ වුහාන් හි නොදන්නා හේතුවක් නිසා නියුමෝනියාව වැළඳී ඇති බවට චීනයේ ලෝක සෞඛ්‍ය සංවිධානයේ කාර්යාලයට දැනුම් දෙන ලදී. බලධාරීන් විසින් කොරොන වයිරස් වර්ගයක් හඳුනා ගන්නා ලද අතර පසුව එය COVID-19 ලෙස නම් කරන ලදී. 2020 ජනවාරි 30 වන දින ලෝක සෞඛ්‍ය සංවිධානයේ අධ්‍යක්ෂ ජනරාල් විසින් COVID-19 පුපුරා යාම ජාත්‍යන්තර සෞඛ්‍ය පිළිබඳ මහජන සෞඛ්‍ය හදිසි අවස්ථාවක් (PHEIC) ලෙස ප්‍රකාශයට පත් කළ අතර 2020 මාර්තු 11 වන දින COVID-19 වසංගතයක් ලෙස සංලක්ෂිත විය.
                                
                                 
                                
                                සෞඛ්‍ය හා දේශීය වෛද්‍ය සේවා අමාත්‍යාංශය ශ්‍රී ලංකාව සඳහා වන ලෝක සෞඛ්‍ය සංවිධානයේ කාර්යාලය සමඟ එක්ව මෙම තත්වය සමීපව අධීක්ෂණය කිරීම සහ සූදානම සහ ප්‍රතිචාර දැක්වීමේ උත්සාහයන් ශක්තිමත් කිරීම. COVID-19 සමඟ effectively ලදායී හා කාර්යක්ෂමව සටන් කිරීම සඳහා අපි ප්‍රධාන හවුල්කරුවන් සමඟ සමීපව කටයුතු කරන්නෙමු. මෙම වසංගතයට මාස හයකට වඩා වැඩි කාලයක් තුළ, COVID-19 පැතිරීම පාලනය කිරීම සඳහා ශ්‍රී ලංකාව විශාල ප්‍රගතියක් ලබා ඇත. කෙසේ වෙතත්, තර්ජනය තවම අවසන් නැත. අප, අපගේ ආදරණීයයන් සහ අපගේ ප්‍රජාවන් ආරක්‍ෂිත, 
                                සෞඛ්‍ය සම්පන්න සහ සමෘද්ධිමත් ලෙස තබා ගැනීම සඳහා ලබා ඇති ප්‍රගතිය මත අප ගොඩනැගිය යුතුය.</h5>
                            

                                <div class="range offset-top-60 text-md-left">
                                    <div class="container cell-sm-6 cell-md-4">
                                        <div class="service"><img class="img-responsive"
                                                src="{{ asset('../publicArea/images/covid/c1.jpg') }}" width="320" height="320"
                                                alt="" />
                                            
                                        </div>
                                    </div>
                                    <div class="container cell-sm-6 cell-md-4 offset-top-50 offset-sm-top-0">
                                        <div class="service"><img class="img-responsive"
                                                src="{{ asset('../publicArea/images/covid/c2.jpg') }}" width="320" height="320" alt="" />
                                            
                                        </div>
                                    </div>
                                    <div class="container cell-sm-6 cell-md-4 offset-top-50 offset-md-top-0">
                                        <div class="service"><img class="img-responsive"
                                                src="{{ asset('../publicArea/images/covid/c3.png') }}" width="320" height="320" alt="" />
                                            
                                        </div>
                                    </div>
                                    <div class="container cell-sm-6 cell-md-4 offset-top-50">
                                        <div class="service"><img class="img-responsive"
                                                src="{{ asset('../publicArea/images/covid/c3.jpg') }}" width="320" height="320" alt="" />
                                            
                                        </div>
                                    </div>
                                    <div class="container cell-sm-6 cell-md-4 offset-top-50">
                                        <div class="service"><img class="img-responsive"
                                                src="{{ asset('../publicArea/images/covid/c4.jpg') }}" width="320" height="320" alt="" />
                                            
                                        </div>
                                    </div>
                                    <div class="container cell-sm-6 cell-md-4 offset-top-50">
                                        <div class="service"><img class="img-responsive"
                                                src="{{ asset('../publicArea/images/covid/c5.jpg') }}" width="320" height="320" alt="" />
                                            
                                        </div>
                                    </div>
                                </div>
                        </div>
                        <div class="col-lg-12" style="margin-top:50px;">
                            <h6 class="text-center">
                                <a href="{{ route('register') }}" class="btn btn-primary">Get Started Now</a>
                            </h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection
@section('css')
<style>
    .breadcrumb-modern {
        margin-top: 13%;
    }

    .color-chng {
        color: #2a93c9;
    }

    .icon-gray-light {
        background: #e5e5e5;
    }

    .bg-covid-image {
        background: url("{{ asset('../publicArea/images/covid.jpg') }}");
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
        margin-top: 170px;

    }

</style>

@endsection
@section('js')
<script>
    $(document).ready(function () {
        $('.color-chng').removeClass('text-white');
        $('.icon-gray-light').removeClass('icon-white-17');
        $('ul').find('li.active').removeClass('active');
        $('#work').addClass('active');
    });

</script>

@endsection

@extends('Public.Layouts.app')
@section('content')

<div class="page animated" style="animation-duration: 500ms;">
    <!-- Page Header-->
    <header class="page-head">

    </header>
    <!-- Modern Breadcrumbs-->
    <section class="bg-work-image context-dark text-md-left">
        <div class="shell section-34 section-md-top-110 section-md-bottom-41">
            <h2>How We Works</h2>
            <ul class="list-inline list-inline-arrows p offset-top-34 offset-md-top-70">
                <li><a class="text-white" href="{{ route('home') }}">Home&nbsp;</a>
                </li>
                <i class="fas fa-xs fa-arrow-right"></i>
                <li class="text-white-50">How We Works
                </li>
            </ul>
        </div>
    </section>
    <!-- Our Customers-->
    <section class="section-98 section-sm-110">
        <div class="shell">
            <div class="range range-xs-center range-md-left">
                <div class="container">
                    <h4>Nenabima Education Platform  අද වඩාත්ම දැයේ දරුවන් කේන්ද්‍ර කරගත් විද්‍යාත්මක​ ඉගෙනුම්  යෙදුමක් ලෙස නිර්මාණය කර ඇත.</h4>
                    <h5>1. දැනුම</h5>
                    <p>ගෝලීයකරණයත් සමග මිනිසා දැනුම සෙවිමට යොමු විය​.එමෙන්ම තරගකාරිත්වය මත විකාශනය වන ඉගෙනුම් රටාවක්ද බිහි විය​.
                        ඒ තුළ ගමන් කරන ඔබේ දරුවා දැනුමෙන් සන්නද්ධ කිරීම අපේ අරමුණයි.
                    </p>
                    <h5>2. ආකල්ප</h5>
                    <p>දැනුම පමණක් නොව දිවි ගමන සාර්ථක කර ගැනිමට අවශ්‍ය වන 
                        අධ්‍යාත්මික ගුණාංගයන් හදවත් තුළ රෝපණය කරමින් දරුවාගේ ආකල්ප සංවර්ධනය කර යහපත් පුරවැසියෙකු දායාද කිරීම අපේ අරමුණයි.</p>
                    <h5>3. කුසලතා</h5>
                    <p>දැනුම ,ආකල්ප වලින් පිරිපුන් කල දරුවන් කුසලතාවයන් පිරි දරු පරපුරක් බවට පත් කොට ශිල්ප 
                        ඥානය ප්‍රායෝගිකව තම දියුණුවටත් සමාජ යහපතටත් යෙදවිය හැකි දරුවෙකු බිහි කිරීම​ අපේ අරමුණයි. </p>
                    <h5>4. ස්වයං අධ්‍යයනය</h5>
                    <p>ගුරුවරයා යනු මග පෙන්වන්නෙකි.ගෝලීයකරණයත් සමග ගුරුකේන්ඳ්‍රීය අධ්‍යාපනයෙන් මිදී ශිෂ්‍යකේන්ඳ්‍රීය 
                        අධ්‍යාපන රටාවකට යොමු විම හේතුවෙන් ස්වයං අධ්‍යයනයේ නිරත වීම​ සුවිශේෂය. </p>
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

    .bg-work-image {
        background: url("{{ asset('publicArea/images/baner2.png') }}");
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

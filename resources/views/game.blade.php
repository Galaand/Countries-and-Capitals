<x-main-layout pageTitle="Countries & Capitals Quiz">

    {{-- @include('components.question', [
        'current_question' => 0,
        'total_question'   => 0,
        'country'         => 'XXXXXX',
    ]) --}}

    <div class="container">

        <x-question :country="$country" :currentQuestion="$currentQuestion" :totalQuestion="$totalQuestions"/>

        <div class="row">

            @foreach ($answers as $answer)
                <x-answer :capital="$answer"/>
            @endforeach

        </div>

    </div>

    <!-- cancel game -->
    <div class="text-center mt-5">
        <a href="#" class="btn btn-outline-danger mt-3 px-5">CANCELAR JOGO</a>
    </div>
</x-main-layout>

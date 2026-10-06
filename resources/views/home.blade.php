@extends('layouts.app')

@section('content')

<section class="home-hero">

    <img
        src="{{ asset('images/f2.jpg') }}"
        alt="Better Globe Forestry Foundation"
        class="home-hero__image"
    >

    <div class="home-hero__overlay"></div>

    <div class="bgf-container">

        <div class="home-hero__content">

            <p class="home-hero__eyebrow">
                Better Globe Forestry Foundation
            </p>

            <h1 class="home-hero__title">
                Why the Foundation
            </h1>

            <p class="home-hero__text">
                Supporting communities and creating meaningful,
                lasting impact through practical initiatives.
            </p>

        </div>

        <div class="home-hero__actions">

    <a href="/go-global" class="home-hero__button home-hero__button--primary">
        Go Global
    </a>

    <a href="/miti-magazine" class="home-hero__button home-hero__button--secondary">
        Miti Magazine
    </a>

</div>

    </div>

</section>


<section class="why-foundation">

    <div class="bgf-container">

        <div class="why-foundation__grid">

            <div class="why-foundation__content">

                <p class="why-foundation__label">
                    Why the Foundation
                </p>

                <h2 class="why-foundation__title">
                    Creating meaningful impact in the communities we serve.
                </h2>

                <p class="why-foundation__text">
                    The Better Globe Forestry Foundation works alongside
                    communities and partners to support practical initiatives
                    that contribute to social, environmental and economic
                    development.
                </p>

            </div>

            <div class="why-foundation__image-wrapper">

                <img
                    src="{{ asset('images/f1.jpg') }}"
                    alt="Better Globe Forestry Foundation"
                    class="why-foundation__image"
                >

            </div>

        </div>

    </div>

</section>

@endsection
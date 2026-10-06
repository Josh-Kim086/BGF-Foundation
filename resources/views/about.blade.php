@extends('layouts.app')

@section('content')

{{-- ABOUT HERO --}}
<section class="about-hero">

    <div class="bgf-container">

        <div class="about-hero__content">

            <p class="about-hero__eyebrow">
                Better Globe Forestry Foundation
            </p>

            <h1 class="about-hero__title">
                About Us
            </h1>

            <p class="about-hero__text">
                Creating meaningful social, environmental and economic
                impact through practical community-focused initiatives.
            </p>

        </div>

    </div>

</section>


{{-- WHAT WE DO --}}
<section class="about-section about-section--light">

    <div class="bgf-container">

        <div class="about-section__grid">

            <div class="about-section__content">

                <p class="about-section__label">
                    What We Do
                </p>

                <h2 class="about-section__title">
                    Turning social responsibility into meaningful action.
                </h2>

                <p class="about-section__text">
                    The Better Globe Forestry Foundation is an independently
                    registered non-profit organization that serves as the
                    CSR implementation partner of Better Globe Forestry Ltd.
                </p>

                <p class="about-section__text">
                    Through practical programs, the Foundation contributes
                    to poverty reduction, restoration of degraded landscapes,
                    environmental conservation and improved livelihoods.
                </p>

                <div class="about-section__list">

                    <span>Tree Donation Programs</span>
                    <span>Micro-Credit Access</span>
                    <span>Water Projects</span>
                    <span>Community Upliftment</span>
                    <span>Conservation</span>
                    <span>Land Regeneration</span>
                    <span>Natural Heritage Preservation</span>

                </div>

            </div>

            <div class="about-section__image-wrapper">

                <img
                    src="{{ asset('images/f3.jpg') }}"
                    alt="Better Globe Forestry Foundation community work"
                    class="about-section__image"
                >

            </div>

        </div>

    </div>

</section>


{{-- WHO WE WORK WITH --}}
<section class="about-section">

    <div class="bgf-container">

        <div class="about-section__grid about-section__grid--reverse">

            <div class="about-section__image-wrapper">

                <img
                    src="{{ asset('images/f1.jpg') }}"
                    alt="Communities supported by Better Globe Forestry Foundation"
                    class="about-section__image"
                >

            </div>

            <div class="about-section__content">

                <p class="about-section__label">
                    Who We Work With
                </p>

                <h2 class="about-section__title">
                    Working alongside communities and trusted partners.
                </h2>

                <p class="about-section__text">
                    Our programs are designed around the needs of communities,
                    particularly people living in dryland regions where
                    environmental challenges and livelihood opportunities
                    are closely connected.
                </p>

                <p class="about-section__text">
                    We also work through partnerships with trusted
                    microfinance institutions and other stakeholders to
                    connect communities with practical resources and
                    opportunities.
                </p>

            </div>

        </div>

    </div>

</section>


{{-- OUR EXPERIENCE --}}
<section class="about-section about-section--light">

    <div class="bgf-container">

        <div class="about-section__grid">

            <div class="about-section__content">

                <p class="about-section__label">
                    Our Experience
                </p>

                <h2 class="about-section__title">
                    Practical experience rooted in community impact.
                </h2>

                <p class="about-section__text">
                    The Foundation's work brings together social development
                    and environmental stewardship through practical programs
                    that respond to local needs.
                </p>

                <p class="about-section__text">
                    Our areas of work include supporting smallholder farmers
                    with high-value seedlings, improving access to water,
                    supporting education and training, restoring degraded
                    land, and protecting dryland ecosystems and biodiversity.
                </p>

            </div>

            <div class="about-section__image-wrapper">

                <img
                    src="{{ asset('images/f2.jpg') }}"
                    alt="Better Globe Forestry Foundation environmental work"
                    class="about-section__image"
                >

            </div>

        </div>

    </div>

</section>


{{-- RELATIONSHIP WITH BGF --}}
<section class="about-section">

    <div class="bgf-container">

        <div class="about-section__grid about-section__grid--reverse">

            <div class="about-section__image-wrapper">

                <img
                    src="{{ asset('images/f3.jpg') }}"
                    alt="Better Globe Forestry Foundation"
                    class="about-section__image"
                >

            </div>

            <div class="about-section__content">

                <p class="about-section__label">
                    Relationship with BGF
                </p>

                <h2 class="about-section__title">
                    Aligned in vision. Independent in governance.
                </h2>

                <p class="about-section__text">
                    The Foundation is closely aligned with the vision and
                    values of Better Globe Forestry while operating
                    independently.
                </p>

                <p class="about-section__text">
                    BGFF maintains independence in governance, decision-making
                    and financial management. When BGF engages BGFF for
                    corporate social responsibility projects, transactions
                    take place at arm's length to support transparency,
                    accountability and compliance with ethical standards
                    and NGO regulations.
                </p>

            </div>

        </div>

    </div>

</section>


{{-- COMMITMENT --}}
<section class="about-section about-section--light">

    <div class="bgf-container">

        <div class="about-section__grid">

            <div class="about-section__content">

                <p class="about-section__label">
                    Commitment
                </p>

                <h2 class="about-section__title">
                    Building a greener, more equitable future.
                </h2>

                <p class="about-section__text">
                    At BGFF, we believe that sustainable forestry must go
                    hand in hand with social responsibility.
                </p>

                <div class="about-commitment">

                    <div class="about-commitment__item">
                        <span class="about-commitment__number">01</span>
                        <p>
                            Empower rural communities through practical
                            support and lasting opportunities.
                        </p>
                    </div>

                    <div class="about-commitment__item">
                        <span class="about-commitment__number">02</span>
                        <p>
                            Operate transparently, with clear separation
                            from commercial interests.
                        </p>
                    </div>

                    <div class="about-commitment__item">
                        <span class="about-commitment__number">03</span>
                        <p>
                            Uphold environmental stewardship while promoting
                            self-reliance and long-term impact.
                        </p>
                    </div>

                </div>

            </div>

            <div class="about-section__image-wrapper">

                <img
                    src="{{ asset('images/f1.jpg') }}"
                    alt="Better Globe Forestry Foundation commitment"
                    class="about-section__image"
                >

            </div>

        </div>

    </div>

</section>

@endsection
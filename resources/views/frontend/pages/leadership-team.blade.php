<x-common-layout :pageTitle="$pageTitle" :pageDescription="$pageDescription" :pageScript="$pageScript">



    <x-addons.pageheader :banners="$banners" />

    <!-- Team Page Start -->
    <div class="page-team">
        <div class="container">
            <div class="row">

                <div class="section-title">
                    <h3 class="wow fadeInUp">Team</h3>
                    <h2 class="text-anime">Board Of Directors</h2>
                </div>

                <x-addons.teammemberall :teams="$bod" />
            </div>
        </div>
    </div>
    <!-- Team Page End -->




    <!-- Team Page Start -->
    <div class="page-team2">
        <div class="container">
            <div class="row">

                <div class="section-title">
                    <h3 class="wow fadeInUp">Team</h3>
                    <h2 class="text-anime">Management Team</h2>
                </div>

                {{-- {{ dd($management) }} --}}

                <x-addons.teammemberall :teams="$management" />
            </div>
        </div>
    </div>
    <!-- Team Page End -->


</x-common-layout>

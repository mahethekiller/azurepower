 @props(['slides'])

 @foreach ($slides as $slide)
     <!-- Page Header Start -->
     <div class="page-header parallaxie investor-page-banner">
         <img class="internal-banner" src="{{ asset('storage/'.$slide->image) }}" alt="{{ $slide->image_alt }}" />
         <div class="container">
             <div class="row">
                 <div class="col-md-12">
                     <!-- Page Header Box Start -->
                     <div class="page-header-box">
                         <h1 class="text-anime text-center">{{ $slide->heading }} </h1>
                         <h2 class="text-anime text-center">{{ $slide->description }}</h2>
                         <nav class="wow fadeInUp" data-wow-delay="0.25s">


                             <x-addons.breadcrumb :items="[
                                 ['label' => 'Home', 'url' => url('/')],
                                 //  ['label' => 'Investor', 'url' => url('/')],
                                 ['label' => ucfirst(request()->segment(1)), 'url' => url()->current()],
                             ]" />


                         </nav>
                     </div>
                     <!-- Page Header Box End -->
                 </div>
             </div>
         </div>
     </div>



     <!-- Page Header End -->
 @endforeach

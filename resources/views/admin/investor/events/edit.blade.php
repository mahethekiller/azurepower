<x-userdashboard-layout :pageTitle="$pageTitle" :pageDescription="$pageDescription" :pageScript="$pageScript">
    <div class="row">
        <div class="col-md-12 col-xl-12">
            <div class="card">
                <div class="card-body">
                    <h2>Update Event</h2>
                    @include('admin.investor.events.form')


                </div>
            </div>
        </div>
    </div>




</x-userdashboard-layout>

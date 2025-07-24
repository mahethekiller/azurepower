 @props(['teams'])
<div class="row">
    @foreach($teams as $member)
        <div class="col-lg-3 col-md-6">
            <div class="team-item wow fadeInUp" data-wow-delay="0.25s">
                <div class="team-image">
                    <figure class="image-anime">
                        <img src="{{ asset('storage/' . $member->image) }}" alt="{{ $member->name }}">
                    </figure>
                </div>
                <div class="team-content">
                    <h2>{{ $member->name }}</h2>
                    <p>{{ $member->title }}</p>
                    <a href="#teamModal"
                        data-bs-toggle="modal"
                        class="btn-team-link"
                        data-name="{{ $member->name }}"
                        data-title="{{ $member->title }}"
                        data-description="{!! $member->description !!}"
                        data-image="{{ asset('storage/' . $member->image) }}"
                        data-links='@json($member->social_links)'>
                        <img width="18px" src="{{ asset('assets/img/icon-link.svg') }}" alt="">
                    </a>
                </div>
            </div>
        </div>
    @endforeach
</div>




<div class="modal fade" id="teamModal" tabindex="-1" aria-hidden="true" aria-labelledby="teamModalLabel">
    <div class="modal-dialog modal-dialog-centered modal-xl">
        <div class="modal-content" style="background: rgba(248, 248, 248, 1);">
            <div class="modal-header border-0 pb-0">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-3">
                        <div class="team-image fadeInUp pb-3" data-wow-delay="0.25s">
                            <figure class="image-anime">
                                <img class="border-radius" id="modal-image" src="" alt="">
                            </figure>
                        </div>
                    </div>
                    <div class="col-md-9">
                        <h1 class="modal-title" id="modal-name"></h1>
                        <p class="bold mb-2" id="modal-designation"></p>
                        <div class="team2-social-links">
                            <ul id="modal-social-links"></ul>
                        </div>
                        <div  id="modal-description"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



<script>
document.addEventListener("DOMContentLoaded", function () {
    const modal = document.getElementById('teamModal');

    document.querySelectorAll('.btn-team-link').forEach(btn => {
        btn.addEventListener('click', function () {
            const name = this.dataset.name;
            const designation = this.dataset.designation;
            const image = this.dataset.image;
            const description = this.dataset.description;
            const social = JSON.parse(this.dataset.links || "[]");

            // Update modal content
            document.getElementById('modal-name').innerText = name;
            document.getElementById('modal-designation').innerText = designation;
            document.getElementById('modal-image').src = image;
            document.getElementById('modal-image').alt = name;
            document.getElementById('modal-description').innerHTML = description;

            // Update social icons
            const socialList = document.getElementById('modal-social-links');
            socialList.innerHTML = "";
            social.forEach(link => {
                const li = document.createElement("li");
                li.innerHTML = `<a href="${link.url}" target="_blank"><i class="fa-brands ${link.icon}"></i></a>`;
                socialList.appendChild(li);
            });
        });
    });
});
</script>


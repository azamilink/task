<x-app-layout>
    <div class="row mt-3">
        <div class="col-md-6">
            @if (session()->has('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{ session()->get('success') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif
            <div class="card">
                <div class="card-header">Welcome to my site</div>
                <div class="card-body">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorem quaerat similique laboriosam provident nisi debitis eveniet eius, commodi facere ex, perspiciatis tempora nemo non! Cupiditate iusto nesciunt placeat obcaecati quas maxime? Aspernatur ducimus nemo accusamus iste saepe. Ipsam corporis aliquam incidunt est accusamus commodi fuga fugit magnam sed. Facere id, eligendi molestiae consequuntur nobis placeat tenetur mollitia! Dolor at ex accusamus itaque vero ea ratione placeat inventore nulla ducimus. Neque magni vero alias accusamus nihil explicabo mollitia recusandae veritatis dolorem?
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

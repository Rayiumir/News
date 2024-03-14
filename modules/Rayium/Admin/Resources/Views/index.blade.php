<x-Admin::AdminLayout>
    <div class="row">
        <div class="col-md-4">
            <div class="card text-bg-light mb-3 text-center rounded-4">
                <div class="card-body">
                    <i class="fa-duotone fa-pen-nib fa-4x"></i>
                    <h4 class="card-title mt-3">تعداد نوشته ها</h4>
                    <p class="card-text fw-bold">{{\modules\Rayium\Post\Models\Post::count()}}</p>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card text-bg-success mb-3 text-center rounded-4">
                <div class="card-body">
                    <i class="fa-duotone fa-users fa-4x"></i>
                    <h4 class="card-title mt-3">تعداد کاربران</h4>
                    <p class="card-text fw-bold">{{\modules\Rayium\User\Models\User::count()}}</p>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card text-bg-info mb-3 text-center rounded-4">
                <div class="card-body">
                    <i class="fa-duotone fa-comments fa-4x"></i>
                    <h4 class="card-title mt-3">تعداد نظرات</h4>
                    <p class="card-text fw-bold">{{\modules\Rayium\Comment\Models\Comment::count()}}</p>
                </div>
            </div>
        </div>
    </div>
</x-Admin::AdminLayout>

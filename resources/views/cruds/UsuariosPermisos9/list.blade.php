<x-default-layout>

    @section('title')
    UsuariosPermisos
    @endsection

    @section('breadcrumbs')
    {{ Breadcrumbs::render('UsuariosPermisos9.index') }}
    @endsection

    <div class="card">
        <!--begin::Card header-->
        <div class="card-header border-0 pt-6">
            <!--begin::Card title-->
            <div class="card-title">
                <!--begin::Search-->
                <div class="d-flex align-items-center position-relative my-1">
                    {!! getIcon('magnifier', 'fs-3 position-absolute ms-5') !!}
                    <input type="text" data-kt-UsuariosPermisos9-table-filter="search" class="form-control form-control-solid w-250px ps-13" placeholder="Buscar" id="mySearchInput" />
                </div>
                <!--end::Search-->
            </div>
            <!--begin::Card title-->

            <!--begin::Card toolbar-->
            <div class="card-toolbar">
                <!--begin::Toolbar-->
                <div class="d-flex justify-content-end" data-kt-UsuariosPermisos9-table-toolbar="base">
                    <!--begin::Add UsuariosPermisos9-->
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#kt_modal_add_UsuariosPermisos9">
                        {!! getIcon('plus', 'fs-2', '', 'i') !!}
                        Agregar UsuariosPermisos
                    </button>
                    <!--end::Add UsuariosPermisos9-->
                </div>
                <!--end::Toolbar-->

                <!--begin::Modal-->
                <livewire:UsuariosPermisos9.add-UsuariosPermisos9-modal></livewire:UsuariosPermisos9.add-UsuariosPermisos9-modal>
                <!--end::Modal-->
            </div>
            <!--end::Card toolbar-->
        </div>
        <!--end::Card header-->

        <!--begin::Card body-->
        <div class="card-body py-4">
            <!--begin::Table-->
            <div class="table-responsive">
                {{ $dataTable->table() }}
            </div>
            <!--end::Table-->
        </div>
        <!--end::Card body-->
    </div>

    @push('scripts')
    {{ $dataTable->scripts() }}
    <script>
        document.getElementById('mySearchInput').addEventListener('keyup', function() {
            window.LaravelDataTables['UsuariosPermisos9-table'].search(this.value).draw();
        });
        document.addEventListener('livewire:init', function() {
            Livewire.on('success', function() {
                $('#kt_modal_add_UsuariosPermisos9').modal('hide');
                window.LaravelDataTables['UsuariosPermisos9-table'].ajax.reload();
            });
        });
        $('#kt_modal_add_UsuariosPermisos9').on('hidden.bs.modal', function() {
            Livewire.dispatch('new_UsuariosPermisos9');
        });
    </script>
    @endpush

</x-default-layout>
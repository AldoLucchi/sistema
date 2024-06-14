<x-default-layout>
@section('title')
Clientes
@endsection

@section('breadcrumbs')
{{ Breadcrumbs::render('Clientes6.show', $Clientes6) }}
@endsection

<div class="card">
    <!--begin::Card header-->
    <div class="card-header border-0 pt-6">
        <!--begin::Card title-->
        <div class="card-title">
            <!--begin::Search-->
            <div class="d-flex align-items-center position-relative my-1">
                {!! getIcon('magnifier', 'fs-3 position-absolute ms-5') !!}
                <input type="text" data-kt-Clientes6-table-filter="search" class="form-control form-control-solid w-250px ps-13" placeholder="Buscar" id="mySearchInput" />
            </div>
            <!--end::Search-->
        </div>
        <!--begin::Card title-->

        <!--begin::Card toolbar-->
        <div class="card-toolbar">
            <!--begin::Toolbar-->
            <div class="d-flex justify-content-end" data-kt-Clientes6-table-toolbar="base">
                <!--begin::Add Clientes6-->
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#kt_modal_add_Clientes6">
                    {!! getIcon('plus', 'fs-2', '', 'i') !!}
                    Agregar Clientes6
                </button>
                <!--end::Add Clientes6-->
            </div>
            <!--end::Toolbar-->

            <!--begin::Modal-->
            <livewire:Clientes6.add-Clientes6-modal></livewire:Clientes6.add-Clientes6-modal>
            <!--end::Modal-->
        </div>
        <!--end::Card toolbar-->
    </div>
    <!--end::Card header-->

    <!--begin::Card body-->
    <div class="card-body py-4">
        <!--begin::Table-->
        <div class="row">
        @include('cruds.Clientes6.fields')
        </div>
        <!--end::Table-->
    </div>
    <!--end::Card body-->
</div>

@push('scripts')

<script>
    
    document.addEventListener('livewire:init', function() {
        Livewire.on('success', function() {
            $('#kt_modal_add_usuarios').modal('hide');
            window.LaravelDataTables['usuarios-table'].ajax.reload();
        });
    });
    $('#kt_modal_add_usuarios').on('hidden.bs.modal', function() {
        Livewire.dispatch('new_usuarios');
    });
</script>
@endpush

</x-default-layout>
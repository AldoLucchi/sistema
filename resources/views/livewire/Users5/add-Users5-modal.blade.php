<div class="modal fade" id="kt_modal_add_Users5" tabindex="-1" aria-hidden="true" wire:ignore.self>
    <!--begin::Modal dialog-->
    <div class="modal-dialog modal-dialog-centered  modal-xl ">
        <!--begin::Modal content-->
        <div class="modal-content">
            <!--begin::Modal header-->
            <div class="modal-header" id="kt_modal_add_Users5_header">
                <!--begin::Modal title-->
                <h2 class="fw-bold">Gestionar Users5</h2>
                <!--end::Modal title-->
                <!--begin::Close-->
                <div class="btn btn-icon btn-sm btn-active-icon-primary" data-bs-dismiss="modal" aria-label="Close">
                    {!! getIcon('cross','fs-1') !!}
                </div>
                <!--end::Close-->
            </div>
            <!--end::Modal header-->
            <!--begin::Modal body-->
            <div class="modal-body px-5 my-7">
                <!--begin::Form-->
                <form id="kt_modal_add_Users5_form" class="form" wire:submit="submit" enctype="multipart/form-data">
                <input type="hidden" wire:model="id" name="id" value="{{ $id }}"/>
                    @csrf

                    @include('livewire.Users5.fields')

                    <!--begin::Actions-->
                    <div class="text-center pt-15">
                        <button type="reset" class="btn btn-light me-3" data-bs-dismiss="modal" aria-label="Close" wire:loading.attr="disabled">Cancelar</button>
                        <button type="submit" class="btn btn-primary" data-kt-Users5-modal-action="submit">
                            <span class="indicator-label" wire:loading.remove>Guardar</span>
                            <span class="indicator-progress" wire:loading wire:target="submit">
                                Espere...
                                <span class="spinner-border spinner-border-sm align-middle ms-2"></span>
                            </span>
                        </button>
                    </div>
                    <!--end::Actions-->
                </form>
                <!--end::Form-->
            </div>
            <!--end::Modal body-->
        </div>
        <!--end::Modal content-->
    </div>
    <!--end::Modal dialog-->
</div>
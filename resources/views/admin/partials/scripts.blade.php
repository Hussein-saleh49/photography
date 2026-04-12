 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous">
 </script>
 <script src="{{ asset('assets-admin') }}/js/scripts.js"></script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
 <script src="{{ asset('assets-admin') }}/assets/demo/chart-area-demo.js"></script>
 <script src="{{ asset('assets-admin') }}/assets/demo/chart-bar-demo.js"></script>
 {{-- <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script> --}}
 <script src="{{ asset('assets-admin') }}/js/datatables-simple-demo.js"></script>
  <script>
        function toggleModal(modalId) {
            const modalEl = document.getElementById(modalId);
            if (!modalEl) return;

            let modal = bootstrap.Modal.getInstance(modalEl);

            if (modal && modalEl.classList.contains('show')) {
                modal.hide();
            } else {
                modal = modal || new bootstrap.Modal(modalEl);
                modal.show();
            }
        }

        // Add Modal
        window.addEventListener('open-add-modal', () => toggleModal('addModal'));
        window.addEventListener('close-add-modal', () => toggleModal('addModal'));

        // Update Modal
        window.addEventListener('open-update-modal', () => toggleModal('updateModal'));
        window.addEventListener('close-update-modal', () => toggleModal('updateModal'));

        // Delete Modal
        window.addEventListener('open-delete-modal', () => toggleModal('deleteModal'));
        window.addEventListener('close-delete-modal', () => toggleModal('deleteModal'));

        // Show Modal ✅
        window.addEventListener('open-show-modal', () => toggleModal('showModal'));
        window.addEventListener('close-show-modal', () => toggleModal('showModal'));
    </script>

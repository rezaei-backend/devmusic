document.addEventListener('DOMContentLoaded', function() {
const saveAdd = document.getElementById('saveAddBook');
const saveEdit = document.getElementById('saveEditBook');
const confirmDelete = document.getElementById('confirmDeleteBook');
function toast(msg, type='primary') {
  const t = document.createElement('div');
  t.className = 'toast align-items-center text-bg-' + type + ' border-0 position-fixed bottom-0 end-0 m-3';
  t.role = 'alert';
  t.innerHTML = '<div class="d-flex"><div class="toast-body">'+msg+'</div><button type="button" class="btn-close btn-close-white me-2 m-auto" data-bs-dismiss="toast" aria-label="Close"></button></div>';
  document.body.appendChild(t);
  const toast = new bootstrap.Toast(t, { delay: 2000 });
  toast.show();
  t.addEventListener('hidden.bs.toast', ()=> t.remove());
}
if (saveAdd) saveAdd.addEventListener('click', ()=> toast('Book added'));
if (saveEdit) saveEdit.addEventListener('click', ()=> toast('Book updated'));
if (confirmDelete) confirmDelete.addEventListener('click', ()=> toast('Book deleted', 'danger'));
});
import Swal from 'sweetalert2';
import { DataTable } from 'simple-datatables';
window.Swal = Swal;
window.DataTable = DataTable;

console.log('simple-datatables loaded:', window.DataTable);


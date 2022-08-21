<x-layout.app>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css">
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.js"></script>

    <main class="relative block mx-auto mt-32 max-w-7xl">
        <div class="flex absolute w-[80%] z-10 justify-between pr-[50px]  h-[36px] items-center gap-4 ">

            <left class="flex items-center gap-4">
                <title class="block text-lg font-bold ">
                    Accounting Sheet
                </title>
                <x-form.select class="h-[36px] -mt-1 min-w-[140px]">
                    <option value="DAO1">Lenovo</option>
                </x-form.select>
            </left>
            <right class="flex items-center gap-4">
                <label>From :</label>
                <x-form.input type="date" class="-mt-1 h-[36px]"></x-form.input>
                <label>To :</label>
                <x-form.input type="date" class="-mt-1 h-[36px]"></x-form.input>
                <x-form.button>Filter</x-form.button>
            </right>

        </div>
        <datatable__accounting>

            <table id="example">
                <thead>
                    <tr>
                        <th>Code</th>
                        <th>Date</th>
                        <th>Account</th>
                        <th>Memo</th>
                        <th>Debit</th>
                        <th>Credit</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Tiger Nixon</td>
                        <td>System Architect</td>
                        <td>Edinburgh</td>
                        <td>61</td>
                        <td>2011-04-25</td>
                        <td>$320,800</td>
                    </tr>

                </tbody>

            </table>
        </datatable__accounting>

    </main>
    <script>
        $(document).ready(function() {
            $('#example').DataTable({
                info: false,
                lengthChange: false,
                "language": {
                    'search': "keyword"
                }
            });

        });
    </script>
</x-layout.app>

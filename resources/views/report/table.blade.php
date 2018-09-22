<div class="box">
    <div class="box-body">
        <table class="table table-bordered table-hovered" id="default">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama barang</th>
                    <th>Jumlah entry</th>
                    <th>Tanggal entry</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    $no = 0;
                ?>
                @foreach($search as $row)
                    <?php
                        $no++
                    ?>
                    <tr>
                        <td>{{$no}}</td>
                        <td>{{$row->bara_name}}</td>
                        <td>{{$row->entr_jumlah}}</td>
                        <td>{{$row->entr_date}}</td>
                    </tr>                
                @endforeach
            </tbody>
        </table>
    </div>
</div>
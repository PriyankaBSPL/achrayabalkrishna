@extends('frontend.layouts.main')
@section('content')

<body>
   <section class="internal-banner">
    <h1>{{$title}}</h1>
    </section>

 
    <section class="award-timeline">
        <div class="timeline">
            <?php
            $counter = 0;
            foreach($data as $row){
                $positionClass = ($counter % 2 == 0) ? 'left mt-0' : 'right';
               
            ?>
            <div class="container <?php echo $positionClass; ?>">
                <div class="date">{{$row->date}}</div>
                <div class="award-img">
                    <?php
                    if(!empty($row->image)){
                    ?>
                    <img src="{{ URL::asset('/admin/uploads/award/' . $row->image)}}">
                    <?php }?>
                </div>
                <div class="content">
                    <h3>{{$row->title}}</h3>
                    <p>
                        {!!$row->description!!}
                    </p>
                </div>
            </div>
            
    <?php  $counter++; }?>

        </div>
    </section>


    </body>
@endsection
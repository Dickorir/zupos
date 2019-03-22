@if(session('success'))
    <div class="alert alert-success alert-dismissible fade-in ${dismissed ? 'hidden': ''}" role="alert">
        <button type="button" class="close" click.delegate="dismiss" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
        <strong>Success!</strong>&nbsp;&nbsp;&nbsp;{{ session('success') }}
    </div>
    <!-- <script type="text/javascript">
        $.iaoAlert({
            msg: "{{ session('success') }}",
            type: "success",
            mode: "dark"
        });
    </script> -->


@elseif(session('status'))
     <div class="alert alert-success alert-dismissible fade-in ${dismissed ? 'hidden': ''}" role="alert">
         <button type="button" class="close" click.delegate="dismiss" data-dismiss="alert" aria-label="Close">
             <span aria-hidden="true">&times;</span>
         </button>
         <strong>Success!</strong>&nbsp;&nbsp;&nbsp;{{ session('status') }}
     </div>
     <!-- <script type="text/javascript">
        $.iaoAlert({
            msg: "{{ session('status') }}",
            type: "success",
            mode: "dark"
        });
    </script> -->

@elseif(session('error'))
    <div class="alert alert-danger alert-dismissible fade-in ${dismissed ? 'hidden': ''}" role="alert">
        <button type="button" class="close" click.delegate="dismiss" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
        <strong>Failed!</strong>&nbsp;&nbsp;&nbsp;{{ session('error') }}
    </div>
    <!-- <script type="text/javascript">
        $.iaoAlert({
            msg: "{{ session('error') }}",
            type: "error",
            mode: "dark"
        });
    </script> -->


@elseif(session('error1'))
    <div class="alert alert-danger fade-in ${dismissed ? 'hidden': ''}" role="alert">
        <button type="button" class="close" click.delegate="dismiss" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
        <strong>Failed!</strong>&nbsp;&nbsp;&nbsp;{{ session('error1') }}
    </div>
@endif

<script>
    $(".alert-dismissible").fadeTo(2000, 500).slideUp(1000, function(){
        $(".alert-dismissible").alert('close');
    });
</script>
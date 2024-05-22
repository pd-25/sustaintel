@section('script')
    <script>
        function setApplyType(application_type, jobId) {
            console.log('application_type', application_type);
            document.getElementById('applicationtype').value = application_type;
            if (jobId !== undefined) {
                console.log('jobId', jobId);
                document.getElementById('jobpostid').value = jobId;                
            }
            
        }
    </script>

<script>
    $(document).ready(function() {
        if (@json($errors->any())) {
            $('#exampleModal').modal('show');
        }
    });
</script>
@endsection
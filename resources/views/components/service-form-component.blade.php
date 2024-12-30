<form action="{{route('book.service')}}" method="POST">

    @csrf
    <div class="form-group">
        <label for=""> Name</label>
        <input type="text"  class="form-control" name="name" placeholder="Your Name" required="">
    </div>
    <div class="form-group">
        <label for=""> Email</label>
        <input type="email" class="form-control" name="email" placeholder="Email Address" required="">
    </div>
    <div class="form-group">
        <label for=""> Service date</label>
        <input type="date" name="service_date" class="form-control" required="">
    </div>
    <div class="form-group">
        <label for="">Service time</label>
        <input type="time" name="service_time" class="form-control" required="">
    </div>

    <div  class="form-group">
        <label for=""> Service</label>

        <select class="wide form-control" name="service_id">
           <option selected disabled>Select service</option>

           @foreach ($services as $service)

           <option value="{{$service->id}}">{{$service->name}}</option>

           @endforeach
        </select>
    </div>
    <div  class="form-group">
        <label for=""> Urgency</label>

        <select class="wide form-control" name="urgency">
           <option selected disabled>Select</option>
           <option value="Very Urgent">Very Urgent</option>
           <option value="Urgent">Urgent</option>
           <option value="Can Be Rescheduled">Can Be Rescheduled</option>


        </select>
    </div>
    <div style="margin: 10px">

        <span>.</span>
    </div>
    <div class="form-group">
        <label for=""> Service location</label>
        <input type="text" class="form-control" name="service_location" id="autocompleteP" placeholder="Service Location" required="">
    </div>
    <div class="form-group">
        <label for=""> Service description</label>

        <textarea name="service_description" class="form-control" placeholder="Write Your Text..."></textarea>
    </div>
    <div class="form-group message-btn">
        <button type="submit" class="theme-btn-four thm-btn">Send Message</button>
    </div>
</form>

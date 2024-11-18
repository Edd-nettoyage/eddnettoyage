<form action="#" method="post">
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
        <input type="date" name="date" class="form-control" required="">
    </div>
    <div class="form-group">
        <label for="">Service time</label>
        <input type="time" name="time" class="form-control" required="">
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
    <div style="margin: 10px">

        <span>.</span>
    </div>
    <div class="form-group">
        <label for=""> Service location</label>
        <input type="text" class="form-control" name="email" id="autocompleteP" placeholder="Service Location" required="">
    </div>
    <div class="form-group">
        <label for=""> Service description</label>

        <textarea name="message" class="form-control" placeholder="Write Your Text..."></textarea>
    </div>
    <div class="form-group message-btn">
        <button type="submit" class="theme-btn-four thm-btn">Send Message</button>
    </div>
</form>

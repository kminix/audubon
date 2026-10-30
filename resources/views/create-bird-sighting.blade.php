<div>
    <h1>Add an Entry The Bird Sighting Community</h1>
    <form id="birdForm" action="{{ url('/store-sighting') }}" method="POST">
        @csrf


        <table class="table table-hover">
            <tr>
                <th colspan="2">Required Information</th>
            </tr>
            <tr>
                <th>Species</th>
                <td><input name="species" type="text" placeholder="Type of Bird" required></td>
            </tr>
            <tr>
                <th>Description</th>
                <td><input name="description" type="text" placeholder="Additional Detail" required></td>
            </tr>


            <tr>
                <th>Sighting Date</th>
                <td><input name="sighted_at" type="datetime-local" required></td>
            </tr>
            <tr>
                <th>Sighting Location</th>
                <td><input name="location" type="text" placeholder="required" required></td>
            </tr>

            <tr>
                <th colspan="2">Optional Information</th>
            </tr>
            <tr>
                <th>Name</th>
                <td><input name="name" type="text" placeholder="Your Name"></td>
            </tr>
            <tr>
                <th>Email</th>
                <td><input name="email" type="email" placeholder="Email Address"></td>
            </tr>
            <tr>
                <th>Phone</th>
                <td><input name="phone" id="phone" type="tel" class="form-control" placeholder="Ex: 123-456-7891"></td>


        </table>

        <button type="submit" name="submit" value="submit">Submit</button>


    </form>
    <script src="{{ asset('js/bird-validation.js') }}"></script>
</div>
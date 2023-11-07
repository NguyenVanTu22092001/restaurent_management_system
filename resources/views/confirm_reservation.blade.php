<x-app-layout>
    <div class="site-content">
        <form class="reservations-form form-alt container-sm" action="/store-reservation" method="POST">
            @csrf
            <div data-bb-track="form" data-bb-track-on="submit" data-bb-track-category="Forms" data-bb-track-action="Submit"
                data-bb-track-label="Reservations" aria-hidden="true"></div>
            <div class="form-header">
                <h2 class="h1 form-heading" style="color: #1C2C59 !important;">YOUR CONTACT INFORMATION</h2>
            </div>
            <div class="form-ui">
                <label for="lead_name">
                    <span class="input-label" aria-hidden="true" style="color: #1C2C59 !important;">Name
                        <span class="input-label-optional">- Optional</span>
                    </span>
                    @if (Auth::check())
                        <div class="form-control-group has-icon-right">
                            <input
                                class="border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm block mt-1 w-full"
                                type="text" style="position: static; color:black;" name="name"
                                value="{{ Auth::user()->name }}" id="name">
                        </div>
                    @else
                        <div class="form-control-group has-icon-right">
                            <input
                                class="border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm block mt-1 w-full"
                                type="text" style="position: static; color:black;" name="name" id="name">
                        </div>
                    @endif
                </label>
                <label for="lead_email">
                    <span class="input-label" aria-hidden="true" style="color: #1C2C59 !important;">Email
                        <span class="input-label-optional">- Optional</span>
                    </span>
                    @if (Auth::check())
                        <div class="form-control-group has-icon-right">
                            <input
                                class="border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm block mt-1 w-full"
                                data-cy="" type="text" style="position: static; color:black;"
                                value="{{ Auth::user()->email }}" name="email" id="">
                        </div>
                    @else
                        <div class="form-control-group has-icon-right">
                            <input
                                class="border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm block mt-1 w-full"
                                data-cy="" type="text" style="position: static; color:black;" name="email"
                                id="">
                        </div>
                    @endif
                </label>
                <label for="lead_phone">
                    <span class="input-label" aria-hidden="true" style="color: #1C2C59 !important;">Phone
                        <span class="input-label-optional">- Optional</span>
                    </span>
                    <div class="form-control-group has-icon-right">
                        <input
                            class="border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm block mt-1 w-full"
                            type="number" style="position: static;  color:black;" name="phone" id="">
                    </div>
                </label>
            </div>
            <div class="form-actions">
                <button type="submit" class="btn btn-brand-alt">Submit</button>
                <span class="form-error-msg">Please check errors in the form above</span>
            </div>
            <div class="form-success-msg">
                <span>Thanks!</span>
            </div>
        </form>
        <script>
            // Get the current date in the format "YYYY-MM-DD"
            var currentDate = new Date().toISOString().split('T')[0];
            // Set the min attribute to the current date
            document.getElementById("datePicker").min = currentDate;
        </script>
</x-app-layout>

<x-app-layout>
    <div class="site-content">
        <form class="reservations-form form-alt container-sm" action="/find-available-table" method="POST">
            @csrf
            <div data-bb-track="form" data-bb-track-on="submit" data-bb-track-category="Forms" data-bb-track-action="Submit"
                data-bb-track-label="Reservations" aria-hidden="true"></div>
            <div class="form-header">
                <h2 class="h1 form-heading" style="color: #1C2C59 !important;">Reservations</h2>
            </div>
            <div class="form-ui">
                {{-- <label for="location" class="input--hidden">
                    <i class="error-label"></i>
                    <span class="input-label">Location
                        <span class="input-label-required">- Required</span>
                    </span>
                    <div class="form-control-group has-icon-right">
                        <select id="location" class="form-control unselected" name="location" required
                            aria-describedby="location">
                            <option value="" disabled>Location</option>
                            <option value="site" selected data-reservation-service="opentable"
                                data-reservation-id="1164199" data-reservation-api-key>The Original Denver | American
                                Restaurant in Denver, CO
                            </option>
                        </select>
                        <span class="form-control-group--icon is-positioned-right" aria-hidden="true">
                            <i class="fa fa-chevron-down"></i>
                        </span>
                    </div>
                </label> --}}
                <label for="seats">
                    <span class="input-label" aria-hidden="true" style="color: #1C2C59 !important;">Number of People
                        <span class="input-label-optional">- Optional</span>
                    </span>
                    <div class="form-control-group has-icon-right">
                        <select id="seats" class="form-control unselected" name="seats">
                            <option value="" selected disabled>Number of People</option>
                            <option value="1">1 Person</option>
                            <option value="2">2 People</option>
                            <option value="3">3 People</option>
                            <option value="4">4 People</option>
                            <option value="5">5 People</option>
                            <option value="6">6 People</option>
                            <option value="7">7 People</option>
                            <option value="8">8People</option>
                        </select>
                        <span class="form-control-group--icon is-positioned-right" aria-hidden="true">
                            <i class="fa fa-chevron-down"></i>
                        </span>
                    </div>
                </label>
                <label for="date">
                    <i class="error-label"></i>
                    <span class="input-label" style="color: #1C2C59 !important;">Date
                        <span class="input-label-required">- Required</span>
                    </span>
                    <div class="form-control-group has-icon-left has-icon-right">
                        <span class="form-control-group--icon is-positioned-left" aria-hidden="true">
                            <i class="fa fa-clock-o"></i>
                        </span>
                        <input type="date" id="datePicker" name="date" class="form-control">
                    </div>
                </label>
                <label for="time">
                    <span class="input-label" aria-hidden="true" style="color: #1C2C59 !important;">Time
                        <span class="input-label-optional">- Optional</span>
                    </span>
                    <div class="form-control-group has-icon-left has-icon-right">
                        <span class="form-control-group--icon is-positioned-left" aria-hidden="true">
                            <i class="fa fa-clock-o"></i>
                        </span>
                        <select id="time" class="form-control unselected" name="time">
                            <option value="" selected disabled>Time</option>
                            <option value="2300">11:00 PM</option>
                            <option value="2230">10:30 PM</option>
                            <option value="2200">10:00 PM</option>
                            <option value="2130">9:30 PM</option>
                            <option value="2100">9:00 PM</option>
                            <option value="2030">8:30 PM</option>
                            <option value="2000">8:00 PM</option>
                            <option value="1930">7:30 PM</option>
                            <option value="1900">7:00 PM</option>
                            <option value="1830">6:30 PM</option>
                            <option value="1800">6:00 PM</option>
                            <option value="1730">5:30 PM</option>
                            <option value="1700">5:00 PM</option>
                            <option value="1630">4:30 PM</option>
                            <option value="1600">4:00 PM</option>
                            <option value="1530">3:30 PM</option>
                            <option value="1500">3:00 PM</option>
                            <option value="1430">2:30 PM</option>
                            <option value="1400">2:00 PM</option>
                            <option value="1330">1:30 PM</option>
                            <option value="1300">1:00 PM</option>
                            <option value="1230">12:30 PM</option>
                            <option value="1200">12:00 PM</option>
                            <option value="1130">11:30 AM</option>
                            <option value="1100">11:00 AM</option>
                            <option value="1030">10:30 AM</option>
                            <option value="1000">10:00 AM</option>
                            <option value="0930">9:30 AM</option>
                            <option value="0900">9:00 AM</option>
                            <option value="0830">8:30 AM</option>
                            <option value="0800">8:00 AM</option>
                            <option value="0730">7:30 AM</option>
                            <option value="0700">7:00 AM</option>
                        </select>
                        <span class="form-control-group--icon is-positioned-right" aria-hidden="true">
                            <i class="fa fa-chevron-down"></i>
                        </span>
                    </div>
                </label>
            </div>
            <div class="form-actions">
                <button type="submit" class="btn btn-brand-alt">Find A Table</button>
                <span class="form-error-msg">Please check errors in the form above</span>
            </div>
            <div class="form-success-msg">
                <span>Thanks!</span>
            </div>
        </form>
    </div>
    {{-- js to restrict past dates input type Date --}}
    <script>
        // Get the current date in the format "YYYY-MM-DD"
        var currentDate = new Date().toISOString().split('T')[0];
        // Set the min attribute to the current date
        document.getElementById("datePicker").min = currentDate;
    </script>
</x-app-layout>

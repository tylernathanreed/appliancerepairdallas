@extends('layouts.page')

@push('breadcrumbs')

    @component('components.breadcrumb')
        Repair Tips
    @endcomponent

@endpush

@section('page.heading')
    Repair Tips
@endsection

@section('page.main')

    <p>Listed below are some of the most common problems we see when out in the field. We can't guarantee that your appliance can be fixed by these tips, but it's a great place to start if you're wanting to do it yourself.</p>

    @component('components.tabs', [
        'style' => 2,
        'items.0.heading' => '<i class="fa fa-refresh pr-10"></i>Washing Machine',
        'items.1.heading' => '<i class="fa fa-snowflake-o pr-10"></i>Refrigerator',
        'items.2.heading' => '<i class="fa fa-fire pr-10"></i>Oven'
    ])

        @slot('items.0.content')

            @component('components.accordion', ['style' => 2])

                @slot('items.0.heading')
                    <i class="fa fa-question-circle pr-10"></i> Not Spinning
                @endslot

                @slot('items.0.content')
                    There is a lid switch that could break and keep the unit from spinning. Another problem could be the drive unit from the motor to the transmission. This could be a broken drive coupling or a belt.
                @endslot

                @slot('items.1.heading')
                    <i class="fa fa-question-circle pr-10"></i> Not Draining
                @endslot

                @slot('items.1.content')
                    This could also be a bad lid switch. Another possibility is a bad drain pump. The hoses could also be clogged or be kinked.
                @endslot

                @slot('items.2.heading')
                    <i class="fa fa-question-circle pr-10"></i> Leaking
                @endslot

                @slot('items.2.content')
                    Pumps can leak, also hoses can puncture. Another concern is that the drain could overflow. To test this, fill the washer and advance the timer to the spin setting. The washer will drain. Use a flashlight to examine the area, where the drain hose drains. If you see water overflowing it is not a problem with the washer, but with the drain.
                @endslot

                @slot('items.3.heading')
                    <i class="fa fa-question-circle pr-10"></i> Not Washing
                @endslot

                @slot('items.3.content')
                    Most washers use a belt or coupling to drive the transmission. If one of these units breaks, the washer will not agitate. The motor might not engage because of a bad starting capacitor or wiring.
                @endslot

            @endcomponent

        @endslot

        @slot('items.1.content')

            @component('components.accordion', ['style' => 2])

                @slot('items.0.heading')
                    <i class="fa fa-question-circle pr-10"></i> Not Cooling
                @endslot

                @slot('items.0.content')
                    <p>Defrost Problem – If a refrigerator has a defrost problem, cold air cannot circulate. This causes the temperature to increase in both the refrigerator and the freezer.</p>

                    <strong>Common Solutions</strong>
                    <ul>
                        <li>Defrost timer</li>
                        <li>Defrost thermostat</li>
                        <li>Sensors</li>
                    </ul>

                    <p>The compressor might not be running.</p>

                    <strong>Possible Causes</strong>
                    <ul>
                        <li>Cold control</li>
                        <li>Capacitor relay starter</li>
                        <li>Logic board</li>
                        <li>Defrost board</li>
                        <li>Wiring</li>
                        <li>Locked up compressor</li>
                        <li>Bad motor or the fan is stuck</li>
                    </ul>

                    <div>There are two fans. One is behind the refrigerator, one is behind the back wall of the freezer. If one of these fans is not running, the refrigerator will not cool properly.</div>
                @endslot

                @slot('items.1.heading')
                    <i class="fa fa-question-circle pr-10"></i> Noisy
                @endslot

                @slot('items.1.content')
                    First identify if the noise is coming from the inside of the refrigerator or outside of it. The evaporator fan motor is located on the inside behind the back wall of the freezer, it could be hitting ice build up or the motor bearing could have failed. The condenser fan motor is located on the back of the refrigerator at the bottom behind the cover (many refrigerators use them), paper or some debris could be caught in the fan.
                @endslot

                @slot('items.2.heading')
                    <i class="fa fa-question-circle pr-10"></i> Leaking Water
                @endslot

                @slot('items.2.content')
                    Check and see if the bottom of the freezer is covered with ice. If ice is present, your defrost drain might be clogged. If the refrigerator has an ice maker or water dispenser unit, check all the water lines.
                @endslot

                @slot('items.3.heading')
                    <i class="fa fa-question-circle pr-10"></i> Door Problems
                @endslot

                @slot('items.3.content')
                    If the door won’t open or close properly, your hinge might be broken, or the door catch could be bent. The bottom hinge is under more stress and is most likely where you will find damage.
                @endslot

                @slot('items.4.heading')
                    <i class="fa fa-question-circle pr-10"></i> No Water from Water Dispenser
                @endslot

                @slot('items.4.content')
                    This is probably the water valve or the water line in the freezer door. This line can freeze.
                @endslot

                @slot('items.5.heading')
                    <i class="fa fa-question-circle pr-10"></i> Not Dispensing Ice
                @endslot

                @slot('items.5.content')
                    The ice auger motor could lock up if water seeps into it and freezes up again. The ice bucket can break, keeping the ice from advancing. The other possibility is that the ice door does not open.
                @endslot

                @slot('items.6.heading')
                    <i class="fa fa-question-circle pr-10"></i> Freezer Frosts Up
                @endslot

                @slot('items.6.content')
                    If warm air seeps into the freezer the result is frost. This can be caused by bad seals or bad alignment of doors. The ice door can also stick open causing a frost problem. Another cause is placing a hot pan with food in it in the freezer or refrigerator.
                @endslot

            @endcomponent

        @endslot

        @slot('items.2.content')

            @component('components.accordion', ['style' => 2])

                @slot('items.0.heading')
                    <i class="fa fa-question-circle pr-10"></i> Not Heating (Electric)
                @endslot

                @slot('items.0.content')
                    First check the breaker. The element is the most common problem associated with no heat. If the element is visually inspected using a flashlight, a melted spot can be identified. The terminal going to the element could be burnt as well. There is a hi-limit thermostat that is located on the back of some ovens. If it is bad, it will prevent the oven from working. A bad electronic control board is possible as well.
                @endslot

                @slot('items.1.heading')
                    <i class="fa fa-question-circle pr-10"></i> Not Heating (Gas)
                @endslot

                @slot('items.1.content')
                    The igniter is the most common problem. The gas valve can go bad as well. The electronic control board if not functioning will also keep the oven from working.
                @endslot

                @slot('items.2.heading')
                    <i class="fa fa-question-circle pr-10"></i> Overheats
                @endslot

                @slot('items.2.content')
                    Bad thermostat, control board, or sensor are possibilities.
                @endslot

                @slot('items.3.heading')
                    <i class="fa fa-question-circle pr-10"></i> Not Very Hot
                @endslot

                @slot('items.3.content')
                    A shorted element or breaker problem possible.
                @endslot

                @slot('items.4.heading')
                    <i class="fa fa-question-circle pr-10"></i> Installation Tips
                @endslot

                @slot('items.4.content')
                    When installing a range make sure to install the anti tip device. Ranges if tipped over are a leading cause of household deaths.
                @endslot

            @endcomponent

        @endslot

    @endcomponent

    <p class="mt-3"><strong>Disclaimer:</strong> For safety, check and obey all national and local electrical laws and permits.</p>

@endsection

@section('page.sidebar-right')

    <div class="sidebar">
        <div class="block clearfix">
            <h3 class="title">Submit Your Question</h3>
            <div class="separator-2"></div>

            <form class="margin-clear">
                <div class="form-group has-feedback">
                    <label for="name3">Name</label>
                    <input type="text" class="form-control" placeholder="Enter your name" required>
                    <i class="fa fa-user form-control-feedback"></i>
                </div>

                <div class="form-group has-feedback">
                    <label for="email3">Email address</label>
                    <input type="email" class="form-control" placeholder="Enter your email" required>
                    <i class="fa fa-envelope form-control-feedback"></i>
                </div>

                <div class="form-group">
                    <label>Category</label>
                    <select class="form-control" id="category">
                        <option value="Sales">Sales</option>
                        <option value="Support">Support</option>
                        <option value="Lorem">Lorem</option>
                        <option value="Ipsum sit">Ipsum sit</option>
                        <option value="Dolor amet">Dolor amet</option>
                    </select>
                </div>

                <div class="form-group has-feedback">
                    <label for="message3">Message</label>
                    <textarea class="form-control" rows="4" placeholder="" required></textarea>
                    <i class="fa fa-pencil form-control-feedback"></i>
                </div>

                <input type="submit" value="Submit" class="submit-button btn btn-default">
            </form>
        </div>

        <div class="block clearfix">
            <h3 class="title">Text Sample</h3>
            <div class="separator-2"></div>

            <p>Consectetur adipisicing. Repellendus neque doloremque, quasi earum voluptatum velit eveniet commodi vel, beatae consequuntur vero ex facilis blanditiis excepturi numquam pariatur ipsum ipsam voluptates!</p>
        </div>
    </div>

@endsection
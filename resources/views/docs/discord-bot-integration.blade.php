@extends('layouts.docs')

@section('content')
    <main class="relative flex justify-center mx-auto max-w-8xl sm:px-2 lg:px-8 xl:px-12">

        @include('inc.docs.sidebar')
        <div class="flex-auto max-w-3xl min-w-0 px-4 py-10 mx-auto lg:pr-0 lg:pl-8 xl:px-16 text-white">
            <article class="">
                <header class="">
                    <p class="text-base font-medium text-slate-300">
                        Getting started
                    </p>

                    <h1 class="text-3xl font-bold tracking-tight">
                        Discord Logging Integration
                    </h1>
                </header>

                <p class="mt-2 text-xl text-slate-300">
                    How to set up our Discord bot in your server to enable logging.
                </p>

                <div class="mt-4 rounded-lg ">
                    <img alt="Discord Integration" class="mx-auto"
                        src="{{ asset('images/docs/discord-integration-example.png') }}">
                </div>

                <div class="space-y-3" id="overview">
                    <h3 class="mt-16 text-2xl font-semibold tracking-tight">
                        Overview
                    </h3>

                    <p class="">
                        CommunityCAD is proud to announce that we have started integrating Discord into the CAD system!
                        Right now we have the following options to be logged:
                    </p>

                    <ul class="list-disc list-inside p-4">
                        <li>CAD On/Off Duty Alert</li>
                        <li>Civilian 911 Call Creation</li>
                    </ul>

                    <p>I have the planned alerts/logging actions:</p>
                    <ul class="list-disc list-inside p-4">
                        <li>New Applications for Staff to review</li>
                        <li>Application actions alerts so the public knows the status of their application at any given
                            point.</li>
                        <li>New Pending Accounts if not using the application system</li>
                    </ul>

                    <p>Some of these are already in the system to be configured. They WILL NOT work. Check our Discord for
                        updates on the status of these alerts.</p>
                </div>

                <div class="space-y-3" id="step1">
                    <h3 class="mt-16 text-2xl font-semibold tracking-tight">
                        Step 1: Invite the Discord Bot to your server
                    </h3>

                    <p class="">
                        Invite the bot to your server with the link below. Once done return to this page.
                        <a class="my-3" href="https://discord.com/oauth2/authorize?client_id=942992379902828564"
                            target="_BLANK">
                            <button
                                class="rounded-md bg-indigo-500 px-3.5 py-2.5 text-sm font-semibold text-white shadow-sm hover:bg-indigo-400 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-500"
                                type="button">Invite BOT</button>
                        </a>
                    </p>

                    <div class="rounded-md bg-yellow-50 p-4 mt-3">
                        <div class="flex">
                            <div class="flex-shrink-0">
                                <svg aria-hidden="true" class="h-5 w-5 text-yellow-400" fill="currentColor"
                                    viewBox="0 0 20 20">
                                    <path clip-rule="evenodd"
                                        d="M8.485 2.495c.673-1.167 2.357-1.167 3.03 0l6.28 10.875c.673 1.167-.17 2.625-1.516 2.625H3.72c-1.347 0-2.189-1.458-1.515-2.625L8.485 2.495zM10 5a.75.75 0 01.75.75v3.5a.75.75 0 01-1.5 0v-3.5A.75.75 0 0110 5zm0 9a1 1 0 100-2 1 1 0 000 2z"
                                        fill-rule="evenodd" />
                                </svg>
                            </div>
                            <div class="ml-3">
                                <div class="text-sm text-yellow-700">
                                    <p>Do not change any of the permissions of the bot. It DOES NOT have
                                        Administrator perms. Only to send and manage messages. Changing these will make the
                                        bot
                                        not work.</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="rounded-md bg-blue-50 p-4 mt-3">
                        <div class="flex">
                            <div class="flex-shrink-0">
                                <svg class="w-5 h-5 text-blue-600" fill="currentColor" viewBox="0 0 24 24"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path clip-rule="evenodd"
                                        d="M2.25 12c0-5.385 4.365-9.75 9.75-9.75s9.75 4.365 9.75 9.75-4.365 9.75-9.75 9.75S2.25 17.385 2.25 12Zm8.706-1.442c1.146-.573 2.437.463 2.126 1.706l-.709 2.836.042-.02a.75.75 0 0 1 .67 1.34l-.04.022c-1.147.573-2.438-.463-2.127-1.706l.71-2.836-.042.02a.75.75 0 1 1-.671-1.34l.041-.022ZM12 9a.75.75 0 1 0 0-1.5.75.75 0 0 0 0 1.5Z"
                                        fill-rule="evenodd" />
                                </svg>
                            </div>
                            <div class="ml-3">
                                <div class="text-sm text-blue-700">
                                    <p>The bot will show as "Offline" however it is always online and working. This is an
                                        known issue and will be fixed at a later time.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="space-y-3" id="step2">
                    <h3 class="mt-16 text-2xl font-semibold tracking-tight">
                        Step 2: Create Channels for the BOT to send messages in
                    </h3>

                    <div class="">
                        <p>Create channels that you wish to have for logging.</p>
                        <p class="">Alerts can go to the same channel. However the same alert can't be sent to two
                            different channels.</p>
                        <p class="">The bot must be able to view and send messages in these channels.</p>
                    </div>

                    <div class="rounded-md bg-blue-50 p-4 mt-3">
                        <div class="flex">
                            <div class="flex-shrink-0">
                                <svg class="w-5 h-5 text-blue-600" fill="currentColor" viewBox="0 0 24 24"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path clip-rule="evenodd"
                                        d="M2.25 12c0-5.385 4.365-9.75 9.75-9.75s9.75 4.365 9.75 9.75-4.365 9.75-9.75 9.75S2.25 17.385 2.25 12Zm8.706-1.442c1.146-.573 2.437.463 2.126 1.706l-.709 2.836.042-.02a.75.75 0 0 1 .67 1.34l-.04.022c-1.147.573-2.438-.463-2.127-1.706l.71-2.836-.042.02a.75.75 0 1 1-.671-1.34l.041-.022ZM12 9a.75.75 0 1 0 0-1.5.75.75 0 0 0 0 1.5Z"
                                        fill-rule="evenodd" />
                                </svg>
                            </div>
                            <div class="ml-3">
                                <div class="text-sm text-blue-700">
                                    <p>I would suggest using a catagory so that the bot has permissions to view and send
                                        messages
                                        into the channels.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="space-y-3" id="step3">
                    <h3 class="mt-16 text-2xl font-semibold tracking-tight">
                        Step 3: Configure CAD Settings
                    </h3>

                    <p class="">
                        Under <span class="text-bold text-red-500">Admin > Discord Channels</span> you will be able to add
                        channels that you wish to send the alerts to.
                    </p>

                    <p class="">Make sure you have developer mode enabled on discord then right click on the channel
                        name in Discord
                        and choose "Copy Channel ID". Paste the Channel ID into the alert you wish to be posted in that
                        channel.</p>
                    <div class="">
                        <img alt="Discord Channel Setting Page" class="w-full mx-auto"
                            src="{{ asset('images/docs/discord-integration-discord-channels-page.png') }}">
                    </div>
                    <p class="">
                        Click save and you are good to go!
                    </p>

                </div>

                <div class="space-y-3" id="questions">

                    <h3 class="mt-16 text-2xl font-semibold tracking-tight">
                        Still have questions?
                    </h3>

                    <p class="">
                        Still have questions? <a class="underline hover:no-underline" href="https://discord.gg/tmZWX7q2yZ"
                            target="_BLANK">Talk
                            to support</a>.
                    </p>
                </div>
            </article>

            {{-- <dl class="flex pt-6 mt-6 border-t border-slate-200">
                <!-- <div class="mr-auto text-left"> -->
                <!--   <dt class="text-sm font-normal tracking-tight text-slate-600"> -->
                <!--     Previous -->
                <!--   </dt> -->

                <!--   <dd class="mt-1"> -->
                <!--     <a class="text-base font-semibold text-slate-900 hover:underline" href="#"> -->
                <!--       Blah -->
                <!--     </a> -->
                <!--   </dd> -->
                <!-- </div> -->

                <div class="ml-auto text-right">
                    <dt class="text-sm font-normal tracking-tight text-slate-600">
                        Next
                    </dt>

                    <dd class="mt-1">
                        <a class="text-base font-semibold text-slate-900 hover:underline" href="#">
                            How does Spinal work?
                        </a>
                    </dd>
                </div>
            </dl> --}}
        </div>
    </main>
@endsection
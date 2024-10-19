@extends($activeTemplate . 'layouts.mobile')
@section('content')
    @include('templates.basic.layouts.mobile.top_nav_mini')


    <div id="appCapsule">
        <!-- minified snippet to load TalkJS without delaying your page -->
        <script>
            (function(t, a, l, k, j, s) {
                s = a.createElement('script');
                s.async = 1;
                s.src = "https://cdn.talkjs.com/talk.js";
                a.head.appendChild(s);
                k = t.Promise;
                t.Talk = {
                    v: 3,
                    ready: {
                        then: function(f) {
                            if (k) return new k(function(r, e) {
                                l.push([f, r, e])
                            });
                            l
                                .push([f])
                        },
                        catch: function() {
                            return k && new k()
                        },
                        c: l
                    }
                };
            })(window, document, []);
        </script>

        <!-- container element in which TalkJS will display a chat UI -->
        <div id="talkjs-container" style="width: 100%;height: 84vh">
            <i>Loading chat...</i>
        </div>
    </div>
@endsection

@push('script')
    <script>
        Talk.ready.then(function() {
            var me = new Talk.User({
                id: '{{$user->username}}',
                name: '{{$user->fullname}}',
                email: '{{$user->email}}',
                photoUrl: '{{ asset("assets/images/avatar/man-2.png") }}',
                welcomeMessage: 'Hey there! How are you? :-)',
            });
            window.talkSession = new Talk.Session({
                appId: 'tCmNzUYz',
                me: me,
            });
            var other = new Talk.User({
                id: '654321',
                name: 'Admin',
                email: 'hemel835@gmail.com',
                photoUrl: 'https://www.goldyarora.com/wp-content/uploads/2017/10/G-Suite-Admin-Logo.png',
                welcomeMessage: 'Hey, how can I help?',
            });

            var conversation = talkSession.getOrCreateConversation(
                Talk.oneOnOneId(me, other)
            );
            conversation.setParticipant(me);
            conversation.setParticipant(other);

            var inbox = talkSession.createInbox({
                selected: conversation
            });
            inbox.mount(document.getElementById('talkjs-container'));
        });
    </script>
@endpush

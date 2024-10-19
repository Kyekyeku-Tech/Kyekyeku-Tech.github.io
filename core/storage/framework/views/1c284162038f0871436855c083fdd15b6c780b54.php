<?php $__env->startSection('content'); ?>
    <?php echo $__env->make('templates.basic.layouts.mobile.top_nav_mini', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>


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
<?php $__env->stopSection(); ?>

<?php $__env->startPush('script'); ?>
    <script>
        Talk.ready.then(function() {
            var me = new Talk.User({
                id: '<?php echo e($user->username); ?>',
                name: '<?php echo e($user->fullname); ?>',
                email: '<?php echo e($user->email); ?>',
                photoUrl: '<?php echo e(asset("assets/images/avatar/man-2.png")); ?>',
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
<?php $__env->stopPush(); ?>

<?php echo $__env->make($activeTemplate . 'layouts.mobile', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/mrorko/Sites/miningJs/core/resources/views/templates/basic/chat.blade.php ENDPATH**/ ?>
<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class EventsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $events = [
            [
                'name' => 'Music Festival 2025',
                'description' => 'The Music Festival 2025 is an unmissable event for music lovers, bringing together the hottest international acts and beloved local artists for a weekend of electrifying performances. Set in the expansive Central Park, New York, this annual festival invites you to enjoy an eclectic mix of genres, from indie rock to electronic dance music, in the heart of one of the world\'s most iconic urban parks. With the stage set against the stunning backdrop of the New York skyline, attendees can expect a thrilling atmosphere, food trucks offering a variety of global cuisines, and plenty of opportunities to connect with fellow music enthusiasts. Don\'t miss out on this unforgettable celebration of sound and culture.',
                'event_date' => Carbon::parse('2025-06-15 16:00:00')->toDateString(), // Only the date
                'event_time' => Carbon::parse('2025-06-15 16:00:00')->toTimeString(), // Only the time
                'location' => 'Central Park, New York',
                'total_capacity' => 20,
            ],
            [
                'name' => 'Tech Conference 2025',
                'description' => 'The Tech Conference 2025 is the ultimate gathering of tech innovators, entrepreneurs, and industry leaders who will dive into the latest trends in technology and the future of innovation. Hosted at the state-of-the-art Moscone Center in San Francisco, this conference features keynote speakers from global tech giants, hands-on workshops, and panel discussions on everything from AI advancements to the next big tech breakthrough. This event offers attendees unparalleled networking opportunities with startups, investors, and tech enthusiasts. Whether you\'re a developer, designer, or tech enthusiast, this is where the future of technology comes to life.',
                'event_date' => Carbon::parse('2025-04-20 09:00:00')->toDateString(),
                'event_time' => Carbon::parse('2025-04-20 09:00:00')->toTimeString(),
                'location' => 'Moscone Center, San Francisco',
                'total_capacity' => 14,
            ],
            [
                'name' => 'Art Exhibition: Modern Masters',
                'description' => 'Experience a curated collection of works by some of the most celebrated contemporary artists in the world at the "Modern Masters" exhibition at the Louvre Museum in Paris. This exhibition showcases thought-provoking pieces across multiple mediums, from striking sculptures to breathtaking paintings. As you walk through the halls of this iconic museum, you\'ll be immersed in the vision of these masters who push the boundaries of modern art. With guided tours and exclusive artist talks, this is an event for art lovers and collectors to witness firsthand the revolutionary impact of today’s leading creators.',
                'event_date' => Carbon::parse('2025-05-10 18:00:00')->toDateString(),
                'event_time' => Carbon::parse('2025-05-10 18:00:00')->toTimeString(),
                'location' => 'Louvre Museum, Paris',
                'total_capacity' => 20,
            ],
            [
                'name' => 'Cooking Masterclass with Chef John',
                'description' => 'Step into the kitchen with renowned Chef John for an exclusive hands-on cooking masterclass at the Culinary Arts School in Los Angeles. In this intimate session, Chef John will share his culinary secrets and guide you through preparing gourmet dishes from scratch. From knife skills to plating techniques, you’ll learn everything you need to impress at your next dinner party. With a limited capacity of just 3 attendees, this is your chance for a truly personalized learning experience and a delicious meal you’ve created yourself.',
                'event_date' => Carbon::parse('2025-07-01 11:00:00')->toDateString(),
                'event_time' => Carbon::parse('2025-07-01 11:00:00')->toTimeString(),
                'location' => 'Culinary Arts School, Los Angeles',
                'total_capacity' => 3,
            ],
            [
                'name' => 'Marathon 2025',
                'description' => 'Lace up your running shoes and get ready for the exhilarating Marathon 2025 in London, UK. Whether you’re a seasoned marathoner or a first-time runner, this event has something for everyone, with multiple race categories designed to challenge all levels of athletes. The race winds through the iconic streets of London, offering spectacular views of landmarks like Big Ben and the Tower of London. After crossing the finish line, celebrate your achievement with fellow runners and spectators at the post-race festival, complete with live music and refreshments.',
                'event_date' => Carbon::parse('2025-10-03 07:00:00')->toDateString(),
                'event_time' => Carbon::parse('2025-10-03 07:00:00')->toTimeString(),
                'location' => 'London, UK',
                'total_capacity' => 20,
            ],
            [
                'name' => 'Fashion Show: Spring Collection',
                'description' => 'Be the first to catch a glimpse of the latest Spring Collection from top designers at Paris Fashion Week. This exclusive fashion show promises an evening of cutting-edge styles, bold runway moments, and a celebration of creativity. Watch as models grace the runway in stunning garments that blend high fashion with innovative design, set in one of the most glamorous cities in the world. With limited seating, this is an intimate, invite-only event that offers a rare opportunity to see the future of fashion up close.',
                'event_date' => Carbon::parse('2025-04-10 20:00:00')->toDateString(),
                'event_time' => Carbon::parse('2025-04-10 20:00:00')->toTimeString(),
                'location' => 'Paris Fashion Week, Paris',
                'total_capacity' => 20,
            ],
            [
                'name' => 'Tech Startup Pitch Night',
                'description' => 'Tech enthusiasts, entrepreneurs, and investors, gather for an exhilarating evening at the Tech Startup Pitch Night. Emerging startups will pitch their innovative ideas, vying for attention and support from investors, industry leaders, and a live audience. This event offers a unique opportunity to witness groundbreaking tech innovations and even vote for your favorite startup. Held in the heart of Silicon Valley, it’s an evening packed with networking, inspiration, and fresh ideas.',
                'event_date' => Carbon::parse('2025-05-25 19:00:00')->toDateString(),
                'event_time' => Carbon::parse('2025-05-25 19:00:00')->toTimeString(),
                'location' => 'Silicon Valley, California',
                'total_capacity' => 7,
            ],
            [
                'name' => 'Yoga Retreat in Bali',
                'description' => 'Escape to the serene landscapes of Bali for a transformative 7-day wellness retreat. This retreat is designed to rejuvenate your mind, body, and soul through daily yoga, meditation, and holistic wellness practices. Nestled in the tranquil town of Ubud, you’ll find a perfect balance between relaxation and self-discovery. The retreat includes personalized yoga sessions, group meditations, and healthy organic meals, all while immersed in Bali’s breathtaking natural beauty.',
                'event_date' => Carbon::parse('2025-08-05 08:00:00')->toDateString(),
                'event_time' => Carbon::parse('2025-08-05 08:00:00')->toTimeString(),
                'location' => 'Ubud, Bali, Indonesia',
                'total_capacity' => 10,
            ],
            [
                'name' => 'Film Premiere: The Great Adventure',
                'description' => 'Join us for an exclusive red-carpet event to celebrate the premiere of "The Great Adventure," the latest blockbuster film. Enjoy a night of glitz and glamour as Hollywood’s finest come together for a spectacular evening filled with celebrity appearances, interviews, and a private screening of the much-anticipated movie. This premiere will be a once-in-a-lifetime event, offering fans the chance to see their favorite stars up close and experience the thrill of a Hollywood movie debut.',
                'event_date' => Carbon::parse('2025-09-01 21:00:00')->toDateString(),
                'event_time' => Carbon::parse('2025-09-01 21:00:00')->toTimeString(),
                'location' => 'Hollywood Theater, Los Angeles',
                'total_capacity' => 15,
            ],
            [
                'name' => 'Comedy Night: Laugh Fest 2025',
                'description' => 'Get ready for a night of laughter at the Laugh Fest 2025! This comedy night features top comedians from around the world performing their funniest routines. The atmosphere will be electric with jokes, witty banter, and hilarious moments that will keep you laughing all evening. Hosted at The Comedy Store in Chicago, it’s the perfect night for those who love comedy and want to enjoy an evening filled with joy and laughter.',
                'event_date' => Carbon::parse('2025-04-15 20:00:00')->toDateString(),
                'event_time' => Carbon::parse('2025-04-15 20:00:00')->toTimeString(),
                'location' => 'The Comedy Store, Chicago',
                'total_capacity' => 15,
            ],
            [
                'name' => 'Photography Workshop',
                'description' => 'Join professional photographers for a hands-on workshop designed to sharpen your photography skills. Whether you\'re a beginner or an experienced photographer, you\'ll learn new techniques, composition tips, and editing secrets to take your photos to the next level. This workshop takes place in Central Park, offering scenic views and natural light for practice and shooting.',
                'event_date' => Carbon::parse('2025-06-01 10:00:00')->toDateString(),
                'event_time' => Carbon::parse('2025-06-01 10:00:00')->toTimeString(),
                'location' => 'Central Park, New York',
                'total_capacity' => 15,
            ],
            [
                'name' => 'Wine Tasting Evening',
                'description' => 'Savor an exclusive evening of rare wines from across the globe at the Vineyard in Napa Valley. During this elegant event, you\'ll have the opportunity to taste a curated selection of world-class wines, guided by expert sommeliers. Learn about the nuances of wine pairing, the art of tasting, and the history of each wine as you indulge in an unforgettable sensory experience.',
                'event_date' => Carbon::parse('2025-07-15 19:00:00')->toDateString(),
                'event_time' => Carbon::parse('2025-07-15 19:00:00')->toTimeString(),
                'location' => 'Vineyard, Napa Valley',
                'total_capacity' => 12,
            ],
            [
                'name' => 'Board Game Night',
                'description' => 'Get ready for a fun and friendly competition at Board Game Night in Austin. This event is perfect for board game enthusiasts of all ages! Enjoy a variety of games from strategy to party games while socializing with friends and fellow gamers. Whether you\'re a seasoned player or new to the world of board games, it\'s sure to be a night full of laughs and exciting challenges.',
                'event_date' => Carbon::parse('2025-04-05 18:00:00')->toDateString(),
                'event_time' => Carbon::parse('2025-04-05 18:00:00')->toTimeString(),
                'location' => 'The Game Room, Austin',
                'total_capacity' => 12,
            ],
            [
                'name' => 'Writing Workshop: Novel Creation',
                'description' => 'Join a group of aspiring authors for a workshop focused on starting your novel. In this creative environment, you will receive expert guidance and practical advice on plotting, character development, and overcoming writer’s block. Whether you have an idea in mind or are looking for inspiration, this workshop is the perfect place to kick-start your writing journey.',
                'event_date' => Carbon::parse('2025-05-15 09:00:00')->toDateString(),
                'event_time' => Carbon::parse('2025-05-15 09:00:00')->toTimeString(),
                'location' => 'Library, Boston',
                'total_capacity' => 10,
            ],
            [
                'name' => 'Dance Class: Salsa Night',
                'description' => 'Step into the rhythm at Salsa Night! Whether you\'re a beginner or looking to refine your moves, this lively class will teach you the basics of salsa dancing in a fun, relaxed atmosphere. Afterward, enjoy a night of dancing to upbeat Latin music. It’s a perfect way to let loose, meet new people, and get your groove on.',
                'event_date' => Carbon::parse('2025-06-10 19:00:00')->toDateString(),
                'event_time' => Carbon::parse('2025-06-10 19:00:00')->toTimeString(),
                'location' => 'Dance Studio, Miami',
                'total_capacity' => 18,
            ],
            [
                'name' => 'Book Club Meetup',
                'description' => 'Join a passionate group of readers for this month’s Book Club Meetup. Engage in lively discussions about the book selection and share your thoughts, opinions, and favorite moments. Whether you\'re a lifelong bookworm or a newcomer to the world of reading, this is a welcoming space to explore new literary worlds with fellow book lovers.',
                'event_date' => Carbon::parse('2025-05-30 15:00:00')->toDateString(),
                'event_time' => Carbon::parse('2025-05-30 15:00:00')->toTimeString(),
                'location' => 'Local Library, Seattle',
                'total_capacity' => 15,
            ],
            [
                'name' => 'Cooking Workshop: Italian Cuisine',
                'description' => 'Embark on a culinary adventure as you learn how to cook authentic Italian dishes in this hands-on workshop. Led by an expert chef, you\'ll master techniques for preparing pasta, sauces, and desserts. Whether you\'re a beginner or a seasoned cook, you’ll walk away with new skills and delicious recipes to impress your family and friends.',
                'event_date' => Carbon::parse('2025-06-20 17:00:00')->toDateString(),
                'event_time' => Carbon::parse('2025-06-20 17:00:00')->toTimeString(),
                'location' => 'Culinary School, Rome',
                'total_capacity' => 10,
            ],
            [
                'name' => 'Paint & Sip Night',
                'description' => 'Unleash your inner artist at Paint & Sip Night in Portland! This fun and creative event allows you to explore your artistic side while enjoying a glass of wine. You’ll be guided step-by-step through painting your very own masterpiece in a relaxed, social setting. No experience required – just bring your creativity and a sense of adventure.',
                'event_date' => Carbon::parse('2025-05-05 18:30:00')->toDateString(),
                'event_time' => Carbon::parse('2025-05-05 18:30:00')->toTimeString(),
                'location' => 'Art Studio, Portland',
                'total_capacity' => 18,
            ],
            [
                'name' => 'Sushi Making Class',
                'description' => 'Discover the art of sushi making at this hands-on class in Tokyo. Under the guidance of an expert sushi chef, you will learn the techniques for making sushi from scratch, including selecting fresh ingredients, preparing rice, and rolling sushi. At the end of the class, you’ll enjoy your own creations and gain the skills to impress your friends and family with your sushi-making talents.',
                'event_date' => Carbon::parse('2025-08-15 16:00:00')->toDateString(),
                'event_time' => Carbon::parse('2025-08-15 16:00:00')->toTimeString(),
                'location' => 'Japanese Restaurant, Tokyo',
                'total_capacity' => 12,
            ],
            [
                'name' => 'Outdoor Adventure: Hiking in the Rockies',
                'description' => 'Explore the breathtaking beauty of the Rocky Mountains on a guided hiking trip. Whether you’re an experienced hiker or a beginner, this adventure is perfect for anyone who loves the outdoors. Along the way, you\'ll take in stunning views, learn about local wildlife, and enjoy the peaceful serenity of the mountains.',
                'event_date' => Carbon::parse('2025-09-10 08:00:00')->toDateString(),
                'event_time' => Carbon::parse('2025-09-10 08:00:00')->toTimeString(),
                'location' => 'Rocky Mountains, Colorado',
                'total_capacity' => 18,
            ],
            [
                'name' => 'Book Launch: The Mystery Novel',
                'description' => 'Attend the exclusive launch of a gripping new mystery novel. Meet the author, hear about the inspiration behind the book, and enjoy an intimate Q&A session. This event will be held at a local bookstore in San Francisco, where you can discuss the book with fellow readers, get a signed copy, and delve into the thrilling world of suspense and intrigue.',
                'event_date' => Carbon::parse('2025-04-25 18:00:00')->toDateString(),
                'event_time' => Carbon::parse('2025-04-25 18:00:00')->toTimeString(),
                'location' => 'Bookstore, San Francisco',
                'total_capacity' => 10,
            ],
        ];
        
        foreach ($events as $event) {
            DB::table('events')->insert([
                'name' => $event['name'],
                'description' => $event['description'],
                'event_date' => $event['event_date'],
                'event_time' => $event['event_time'],
                'location' => $event['location'],
                'total_capacity' => $event['total_capacity'],
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }               
    }
}

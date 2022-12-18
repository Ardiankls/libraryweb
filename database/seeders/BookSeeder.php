<?php

namespace Database\Seeders;

use App\Models\Book;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $book = new Book();
        $book->slug = ('How-to-be-a-Graphic-Designer,-Without-Losing-Your-Soul');
        $book->title=('How to be a Graphic Designer, Without Losing Your Soul');
        $book->about=('Designers are quick to tell us about their sources of inspiration, but they are much less willing to reveal such critical matters as how to find work, how much they charge, and what to do when a client rejects three weeks of work and refuses to pay the bill.');
        $book->author=('Adrian Shaughnessy');
        $book->save();

        $book = new Book();
        $book->slug = ('The-Design-of-Everyday-Things');
        $book->title=('The Design of Everyday Things');
        $book->about=('The Design of Everyday Things is a best-selling book by cognitive scientist and usability engineer Donald Norman about how design serves as the communication between object and user, and how to optimize that conduit of communication in order to make the experience of using the object pleasurable.');
        $book->author=('Don Norman');
        $book->save();

        $book = new Book();
        $book->slug = ('How-to-win-friends-and-influence-people.-How-to-stop-worrying-and-start-living');
        $book->title=('How to win friends and influence people. How to stop worrying and start living');
        $book->about=('How to Win Friends and Influence People is a 1936 self-help book written by Dale Carnegie. Over 30 million copies have been sold worldwide, making it one of the best-selling books of all time. Carnegie had been conducting business education courses in New York since 1912.');
        $book->author=('Dale Carnegie');
        $book->save();

        $book = new Book();
        $book->slug = ('The-Psychology-of-Money:-Timeless-Lessons-on-Wealth,-Greed,-and-Happiness');
        $book->title=('The Psychology of Money: Timeless Lessons on Wealth, Greed, and Happiness');
        $book->about=('Doing well with money isn’t necessarily about what you know. It’s about how you behave. And behavior is hard to teach, even to really smart people.Money—investing, personal finance, and business decisions—is typically taught as a math-based field, where data and formulas tell us exactly what to do.');
        $book->author=('Morgan Housel');
        $book->save();

        $book = new Book();
        $book->slug = ('DA-VINCI-CODE');
        $book->title=('DA VINCI CODE');
        $book->about=('Harvard professor Robert Langdon receives an urgent late-night phone call while on business in Paris: the elderly curator of the Louvre has been brutally murdered inside the museum. Alongside the body, police have found a series of baffling codes.');
        $book->author=('Dan Brown');
        $book->save();

        $book = new Book();
        $book->slug = ('Book-of-Revelation');
        $book->title=('Book of Revelation');
        $book->about=('The Book of Revelation is the final book of the New Testament. Its title is derived from the first word of the Koine Greek text: apokalypsis, meaning "unveiling" or "revelation". The Book of Revelation is the only apocalyptic book in the New Testament canon. It occupies a central place in Christian eschatology.');
        $book->author=('John');
        $book->save();


       
    }
}

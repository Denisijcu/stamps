console.log('Show pictures running');
const presidents =[
    {
        name: "George Washington",
        pic: "./images/b1.jpg",
        quote: 'Be courteous to all, but intimate with few, and let those few be well tried before you give them your confidence. True friendship is a plant of slow growth, and must undergo and withstand the shocks of adversity before it is entitled to appellation.',
    },
    {
        name: "John Adams",
        "pic": "./images/b2.jpg",
        quote: "I read my eyes out and can't read half enough...the more one reads the more one sees we have to read."
    },
    {
        name: "Tomas Jefferson",
        pic: "./images/b3.jpg",
        quote: "Do you want to know who you are? Don't ask. Act! Action will delineate and define you."
    },
    {
        name: "James Madison",
        pic: "./images/b4.jpg",
        quote: "The advancement and diffusion of knowledge is the only guardian of true liberty."
    },
    {
        name: "James Monroe",
        pic: "./images/b5.jpg",
        quote:"If there be a people on earth whose more especial duty it is to be at all times prepared to defend the rights with which they are blessed, and to surpass all others in sustaining the necessary burthens, and in submitting to sacrifices to make such preparations, it is undoubtedly the people of these states."
    },
    {
        name: "John Quincy Adams",
        pic: "./images/b6.jpg",
        quote: "Let the human mind loose. It must be loose. It will be loose. Superstition and dogmatism cannot confine it."
    },
    {
        name: "Andrew Jackson",
        pic: "./images/b7.jpg",
        quote: "It is a damn poor mind that can think of only one way to spell a word."
    },
    {
        name: "Martin Van Buren",
        pic: "./images/b8.jpg",
        quote:"it is easier to do a job right than to explain why you didnt"
    },
    {
        name: "William Henry Harrison",
        pic: "./images/b9.jpg",
        quote: "There is nothing more corrupting, nothing more destructive of the noblest and finest feelings of our nature, than the exercise of unlimited power."
    },
    {
        name: "John Tyler",
        pic: "./images/b10.jpg",
        quote: "John Tyler"
    },
    {
        name: "James Polk",
        pic: "./images/b11.jpg",
        quote: "General Polk, who was dignified and corpulent, walked back slowly, not wishing to appear too hurried or cautious in the presence of the men, and was struck across the breast by an unexploded shell, which killed him instantly."
    },
    {
        name: "Zachary Taylor",
        pic: "./images/b12.jpg",
        quote: "Fear is the tax that conscience pays to guilt."
    },
    {
        name: "Millard Fillmore",
        pic: "./images/b13.jpg",
        quote: "An honorable defeat is better than a dishonorable victory."
    },
    {
        name: "Franklin Pierce",
        pic: "./images/b14.jpg",
        quote: "Nothing is more responsible for the good old days than a bad memory."

    },
    {
        name: "James Buchanan",
        pic: "./images/b15.jpg",
        quote: "I have seldom met an intelligent person whose views were not narrowed and distorted by religion."
    },
    {
        name: "Abraham Lincoln",
        pic: "./images/b16.jpg",
        quote: "Whatever you are, be a good one."
    },

    {
        name: "Andrew Johnson",
        pic: "./images/b17.jpg",
        quote: "God being willing and whether traitors be few or many I intend to fight them to the end."
    },
    {
        name: "Ulysses S. Grant",
        pic: "./images/b18.jpg",
        quote: "In every battle there comes a time when both sides consider themselves beaten. Then he who continues the attack wins."
    },
    {
        name: "Rutherfore B. Hayes",
        pic: "./images/b19.jpg",
        quote: "Rutherfore B. Hayes"
    },
    {
        name: "James Abram Garfield",
        pic: "./images/b20.jpg",
        quote: "It has occurred to me that the thing you have, that all men have enough of, is perhaps the thing that you care for the best, and that is your leisure - the leisure you have to think; the leisure you have to be let alone; the leisure you have to throw the plummet into your mind, and sound the depth and dive for things below."
    },
    {
        name: "Chester Alan Arthur",
        pic: "./images/b21.jpg",
        quote: ""
    },
    {
        name: "Grover Cleveland",
        pic: "./images/b22.jpg",
        quote: "A cause worth fighting for is worth fighting for to the end."
    },
    {
        name: "Benjamin Harrison",
        pic: "./images/b23.jpg",
        quote: "What saddens me most is that some poor woman out there has to be Garth's wife. And his three children -- oh, his poor three children. What a despicable human being this guy is."
    },
    {
        name: "Grover Cleveland",
        pic: "./images/b24.jpg",
        quote: ""
    },
    {
        name: "William McKinley",
        pic: "./images/b25.jpg",
        quote: "The more profoundly we study this wonderful book [the Bible], and the more closely we observe its divine precept, the better citizens we will become and the higher will be our destiny as a nation."
    },
    {
        name: "Theodore Roosevelt",
        pic: "./images/b26.jpg",
        quote: "It is hard to fail, but it is worse never to have tried to succeed."

    },
    {
        name: "William Howard Taft",
        pic: "./images/b27.jpg",
        quote: "Don't write so that you can be understood, write so that you can't be misunderstood."
    },
    {
        name: "Woodrow (Thomas) Wilson",
        pic: "./images/b28.jpg",
        quote: "The history of liberty is the history of limitation of government’s power, not the increase of it."
    },
    {
        name: "Warren Gamaliel Harding",
        pic: "./images/b29.jpg",
        quote: "Honesty is the great essential. It exalts the individual citizenship, and, without honesty, no man deserves the confidence of the people in private pursuit or in public office."
    },
    {
        name: "Calvin (John) Coolidge",
        pic: "./images/b30.jpg",
        quote: "Nothing in this world can take the place of persistence. Talent will not; nothing is more common than unsuccessful people with talent. Genius will not; unrewarded genius is almost a proverb. Education will not; the world is full of educated derelicts. Persistence and determination alone are omnipotent. The slogan ‘press on’ has solved and always will solve the problems of the human race."
    },
    {
        name: "Hebert Clark Hoover",
        pic: "./images/b31.jpg",
        quote: ""
    },
    {
        name: "Franklin Delano Roosevelt",
        pic: "./images/b32.jpg",
        quote: "The only thing we have to fear is fear itself."
    },
    {
        name: "Harry S. Truman",
        pic: "./images/b33.jpg",
        quote: "Not all readers are leaders, but all leaders are readers."
    },
    {
        name: "Dwight (David) Eingenshower",
        pic: "./images/b34.jpg",
        quote: "Every gun that is made, every warship launched, every rocket fired signifies in the final sense, a theft from those who hunger and are not fed, those who are cold and are not clothed. This world in arms is not spending money alone. It is spending the sweat of its laborers, the genius of its scientists, the hopes of its children. This is not a way of life at all in any true sense. Under the clouds of war, it is humanity hanging on a cross of iron."
    },
    {
        name: "John Fitzgerald Kennedy",
        pic: "./images/b35.jpg",
        quote: "Let us never negotiate out of fear. But let us never fear to negotiate."
    },
    {
        name: "Lyndon Baines Johnson",
        pic: "./images/b36.jpg",
        quote: "Books and ideas are the most effective weapons against intolerance and ignorance."
    },
    {
        name: "Richard Milhouse Nixon",
        pic: "./images/b37.jpg",
        quote: "The greatness comes not when things go always good for you. But the greatness comes when you're really tested, when you take some knocks, some disappointments, when sadness comes. Because only if you've been in the deepest valley can you ever know how magnificent it is to be on the highest mountain."
    },
    {
        name: "Gerald Rudolph Ford",
        pic: "./images/b38.jpg",
        quote: "A government big enough to give you everything you want is a government big enough to take from you everything you have.",
    },
    {
        name: "Jimmy Carter",
        pic: "./images/b39.jpg",
        quote: "We should live our lives as though Christ was coming this afternoon.",
        
    },
    {
        name: "Ronald Wilson Reagan",
        pic: "./images/b40.jpg",
        quote: "The greatest leader is not necessarily the one who does the greatest things. He is the one that gets the people to do the greatest things.",

    },
    {
        name: "George Herber Walker Bush",
        "pic": "./images/b41.jpg",
        quote: "There is but one just use of power, and it is to serve people.",
    },
    {
        name: "William (Bill) Jefferson Clinton",
        pic: "./images/b42.jpg",
        quote: "We all do better when we work together. Our differences do matter, but our common humanity matters more."
    },
    {
        name: "George Walker Bush",
        pic: "./images/b43.jpg",
        quote: "One of the great things about books is sometimes there are some fantastic pictures."
    },
    {
        name: "Barack Hussein Obama",
        pic: "./images/b44.jpg",
        quote: "Change will not come if we wait for some other person, or if we wait for some other time. We are the ones we've been waiting for. We are the change that we seek."
    },
    {
        name: "Donald Trump",
        pic: "./images/b45.jpg",
        quote: "As long as you are going to be thinking anyway, think big. <span> <br> Show me someone without an ego, and I'll show you a loser.</span>"

    },
];

const elementPic = document.querySelector('#base');
const elementName = document.querySelector('#name-picture');
elementPic.src=presidents[0].pic;
const elementQuote = document.querySelector('#quote');

let j = 0;
let i = setInterval( ()=>{
   
    if (j>44){
        clearInterval(i);
        j= 0;
    }else{
        elementPic.src=presidents[j].pic;
        elementPic.title=presidents[j].name;
        elementQuote.innerHTML = `<p> <cite>${presidents[j].quote} </cite></p>  <p><cite>${presidents[j].name}</cite></p>`;

    }

    j++;

}, 9000);

console.log('running', presidents);
presidents.map(president =>{
    console.log(president);
});
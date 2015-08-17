<?php
	$db_hostname = "localhost";
	$db_database = "OFFICE";
	$db_username = "root";
	$db_password = "bandages";

	// Create connection
	$con = mysqli_connect($db_hostname, $db_username, $db_password, $db_database); //attempting to make a connection to the database
	if (!$con) {
	    die("Connection failed: " . mysqli_connect_error());
	}


	function MkEpp ($season, $episode, $title, $category, $desc){
		$db_hostname = "localhost";
		$db_database = "OFFICE";
		$db_username = "root";
		$db_password = "bandages";

		$con = mysqli_connect($db_hostname, $db_username, $db_password, $db_database); //attempting to make a connection to the database

		$sql = mysqli_query($con, "INSERT INTO EPISODES (SEASON, EPISODE, TITLE, CATEGORY, DESCRIPTION) VALUES ('$season', '$episode', '$title', '$category', '$desc') " );
		if(!$sql){
			echo $season . " " . $episode . " " . mysqli_errno($con) ." \n";
		}

		mysqli_close($con);
	}


	
// SEASON ONE ------------------------------------------------
			$season = '1';
			 $episode = '1';
			  $title = 'Pilot';
			   $category = '1'; 
			   $desc = "A documentary crew arrives at the Scranton, Pennsylvania offices of Dunder Mifflin to observe the employees and learn about modern management. Manager Michael Scott (played by Steve Carell) tries to paint a happy picture in the face of potential downsizing from corporate. The office also gets new employee Ryan Howard (B.J. Novak) as a temporary worker, while Jim Halpert\'s (John Krasinski) pranks antagonize Dwight Schrute (Rainn Wilson).";
				MkEpp($season, $episode, $title, $category, $desc);

			$season = '1';
			 $episode = '2';
			  $title = "Diversity Day";
			   $category = '';
			    $desc = "Manager Michael Scott\'s controversial imitation of a Chris Rock routine forces the staff to undergo a racial diversity seminar. A consultant (Larry Wilmore) arrives to teach the staff about tolerance and diversity, but Michael insists on imparting his own knowledge—aggravating both the consultant and the entire office staff—and creates his own diversity seminar. He eventually assigns each staff member an index card with a different race on it, causing tempers to slowly simmer until they finally snap. Meanwhile, Jim struggles to keep hold of a lucrative contract extension, but Dwight makes the sale for himself. Nevertheless, when Jim\'s love interest, Pam Beesly, falls asleep on his shoulder at the end of the meeting, he concludes that it was not a bad day. ";
				MkEpp($season, $episode, $title, $category, $desc);

			$season = '1'; $episode = '3'; $title = "Health Care"; $category = ''; $desc = "In an effort to save money to prevent downsizing, Michael puts Dwight in charge of choosing the company\'s new health care plan. Dwight\'s chosen plan slashes benefits, much to the chagrin of the other employees. In an attempt to appease them, Michael promises the entire office a surprise, and then spends the rest of the day scrambling to come through with his promise. The employees wait for Michael\'s surprise, which he awkwardly never delivers. Meanwhile, Jim and Pam amuse themselves with Dwight\'s medical forms.";
				MkEpp($season, $episode, $title, $category, $desc);

			$season = '1'; $episode = '4'; $title = "The Alliance"; $category = ''; $desc = "As downsizing rumors swirl, paranoia takes over the members of the office. Dwight forms a Survivor-esque alliance with Jim against the other employees—later adding Pam also. Meanwhile, Michael arranges a morale-boosting birthday party for Meredith Palmer (Kate Flannery)—although her birthday is more than a month away. Michael agonizes over writing the perfect greeting in her birthday card, and in the end, his joke (and subsequent rejected ones) falls flat, ruining the party.";
				MkEpp($season, $episode, $title, $category, $desc);

			$season = '1'; $episode = '5'; $title = "Basketball"; $category = ''; $desc = "Michael and the office staff take on the workers in the warehouse in a basketball game. Through racist and sexist ideals, Michael chooses many of the lesser skilled office workers over their more athletic peers. Michael claims a \'flagrant personal intentional foul,\' stops the game, and declares his team as the winners. The warehouse finds the call unfair and Michael caves under pressure, and concedes the victory to the warehouse staff. Michael eventually tells the office that they don\'t have to come in on Saturday either, but it does little to calm them: \'Like coming in an extra day is going to prevent us from being downsized.\'";
				MkEpp($season, $episode, $title, $category, $desc);

			$season = '1'; $episode = '6'; $title = "Hot Girl"; $category = ''; $desc = "When an attractive purse saleswoman named Katy (Amy Adams) comes to the office, Michael and Dwight openly vie for her attention. Meanwhile, the corporate office allocates $1,000 for a prize for the top office salesman, but Michael spends the money on an espresso machine in order to try to impress Katy. However, in the end she actually ends up leaving with Jim, devastating both Michael and Dwight.";
				MkEpp($season, $episode, $title, $category, $desc);
			
// SEASON TWO ----------------------------------------------	

			$season = '2'; $episode = '1'; $title = 'The Dundies'; $category = ''; $desc = "Michael Scott announces that it is time for the annual \"Dundies\" celebration, and everyone is placing their bets that this year\'s award show will be the worst yet with Michael as the bumbling emcee.";
				MkEpp($season, $episode, $title, $category, $desc);

			$season = '2'; $episode = '2'; $title = 'Sexual Harassment'; $category = ''; $desc = "Corporate headquarters orders Toby to conduct a review at the Scranton branch of the company\'s sexual harassment policies. The company also sends a lawyer to Scranton. Michael fears that this will stop his ability to keep an \"easy-going office\", but later realizes that the lawyer that was sent was to protect him.";
				MkEpp($season, $episode, $title, $category, $desc);

			$season = '2'; $episode = '3'; $title = 'Office Olympics'; $category = ''; $desc = "Michael and Dwight leave to close a deal on Michael\'s new condominium. Michael meets with his Realtor Carol, but becomes stressed when he realizes how long he will be paying for his condo. Boredom leads Pam and Jim to invent the office olympics, in which their co-workers compete in various games using office supplies. Michael and Dwight\'s return stops the event, but Jim gives the gold medal to Michael, for closing the purchase of his condominium.";
				MkEpp($season, $episode, $title, $category, $desc);

			$season = '2'; $episode = '4'; $title = 'The Fire'; $category = ''; $desc = "A fire in the office leads the employees to evacuate the building. To pass the time, the employees play games and learn more about each other. Michael tries to make himself a mentor to Ryan, but discovers that Ryan is more educated than he is. Dwight becomes jealous of the attention that Michael is giving Ryan. At the end of the day, it is determined that Ryan accidentally caused the fire.";
				MkEpp($season, $episode, $title, $category, $desc);

			$season = '2'; $episode = '5'; $title = 'Halloween'; $category = ''; $desc = 'Downsizing leads corporate headquarters to order Michael to fire somebody by the end of October. Michael procrastinates until Halloween, when he still has not decided whom to fire. When he decides to fire Creed, Creed manages to convince Michael to fire Devon.';
				MkEpp($season, $episode, $title, $category, $desc);

			$season = '2'; $episode = '6'; $title = 'The Fight'; $category = ''; $desc = 'Michael and Dwight get in an argument about which of them could beat the other in a fight. They decide to settle this by having a showdown at a local dojo. Michael finally emerges victorious. The two are cold to each other throughout the day until, as a show of good faith, Michael promotes Dwight to Assistant Regional Manager.';
				MkEpp($season, $episode, $title, $category, $desc);

			$season = '2'; $episode = '7'; $title = 'The Client'; $category = ''; $desc = 'Jan and Michael meet an important client. Michael angers Jan with his antics and refusal to talk business, but later, Michael and the client create a bond, and Michael closes the deal. Jan is impressed, she and Michael end up spending the night together. Back at the office, the employees find a screenplay written by Michael.';
				MkEpp($season, $episode, $title, $category, $desc);

			$season = '2'; $episode = '8'; $title = 'Performance Review'; $category = ''; $desc = 'Michael conferences with the employees during their annual performance reviews, while he worries about his own upcoming performance review with Jan. He takes tips from the suggestion box on ways to better himself, but the attempt ends in disaster when Jan discovers that Michael has told his employees about their romantic encounter.';
				MkEpp($season, $episode, $title, $category, $desc);

			$season = '2'; $episode = '9'; $title = "E-Mail Surveillance"; $category = ''; $desc = "Jim is hosting a party, but has not invited Michael. Michael learns of this when he begins spying on his employees\' e-mail. Pam begins to notice Dwight and Angela engaging in odd interactions, and suspects that they are in a relationship, but dismisses the idea. Michael, unable to distract himself with an improv class, crashes Jim\'s party.";
				MkEpp($season, $episode, $title, $category, $desc);

			$season = '2'; $episode = '10'; $title = "Christmas Party"; $category = ''; $desc = "The office Christmas party turns into a disaster when Michael decides to give all of the employees the ability to steal each other\'s gifts. While Michael attempts to procure a better gift, the rest of the members of the office all attempt to win the iPod that Michael originally bought for Ryan. Seeing that his idea has ruined the party, Michael buys alcohol for everyone.";
				MkEpp($season, $episode, $title, $category, $desc);

			$season = '2'; $episode = '11'; $title = "Booze Cruise"; $category = ''; $desc = 'Michael rents a boat for the annual motivational cruise, where he angers the captain with his antics. A drunken Roy publicly sets a wedding date without consulting Pam. Jim realizes that he is still in love with Pam and breaks up with his date Katy. Jim reveals to Michael that he is in love with Pam.';
				MkEpp($season, $episode, $title, $category, $desc);

			$season = '2'; $episode = '12'; $title = "The Injury"; $category = ''; $desc = 'Michael burns his foot on a George Foreman Grill while at his own home. He requests that one of the employees of the office come to his house to pick him up. Dwight volunteers, but crashes his car. Dwight suffers a concussion, but it brings out a good-natured Dwight, who is kind and helpful to the other employees. Michael and Dwight are later taken to the hospital.';
				MkEpp($season, $episode, $title, $category, $desc);

			$season = '2'; $episode = '13'; $title = "The Secret"; $category = ''; $desc = 'Jim becomes nervous when Michael almost reveals that Jim is in love with Pam. He asks Michael not to tell anyone, but Michael ends up revealing the secret anyway. Jim tells Pam that he had a crush on her years ago, but that it ended when he found out she was engaged. Meanwhile, Oscar calls in sick, prompting Dwight to spy on him to determine whether he was telling the truth. Oscar is revealed to be gay, although Dwight does not realize it.';
				MkEpp($season, $episode, $title, $category, $desc);

			$season = '2'; $episode = '14'; $title = "The Carpet"; $category = ''; $desc = 'Michael discovers someone has defecated in his office. He suspects that one of his employees did it out of hate, leading him to begin resenting them. He later realizes that it was his \"best friend\" Todd Packer who did it, and instantly finds the humor in the action.';
				MkEpp($season, $episode, $title, $category, $desc);

			$season = '2'; $episode = '15'; $title = "Boys and Girls"; $category = ''; $desc = "Jan comes to Scranton to lead a seminar for the women in the office. Michael becomes upset for being left out, and decides to host his own seminar for the men. When he tries to rally the staff to unionize, Jan\'s threat of a lawsuit ends the attempt. Later, after Jan recommends to Pam that she should enter a graphic design course, Roy persuades her not to go through with it.";
				MkEpp($season, $episode, $title, $category, $desc);

			$season = '2'; $episode = '16'; $title = "Valentine\'s Day"; $category = ''; $desc = "On Valentine\'s Day, Michael leaves for New York City for a meeting between branch managers and the company\'s new CFO, David Wallace. Michael tells the other branch managers that he and Jan are in a relationship, and a disgruntled manager later tells David. Michael is able to save both Jan\'s and his jobs when he tells David that he was joking. At the office, Phyllis\' boyfriend sends her multiple gifts, and Dwight and Angela secretly exchange gifts.";
				MkEpp($season, $episode, $title, $category, $desc);
			
			$season = '2'; $episode = '17'; $title = "Dwight\'s Speech"; $category = ''; $desc = "Dwight is named Dunder-Mifflin\'s top salesman, and is given the honor of speaking at a salesman\'s convention. He becomes nervous, and Jim, seeing this, \"helps\" by giving Dwight lines from speeches by figures such as Adolf Hitler and Benito Mussolini. At the convention, Dwight becomes nervous, but after a failed attempt by Michael to entertain the crowd, Dwight goes to the stand and delivers a rousing speech.";
				MkEpp($season, $episode, $title, $category, $desc);

			$season = '2'; $episode = '18'; $title = "Take Your Daughter to Work Day"; $category = ''; $desc = "The employees bring in their daughters for the annual \"Take Your Daughter to Work Day\". Michael finds enjoyment in talking with the children, especially Toby\'s daughter Sasha. Stanley\'s teenage daughter Melissa develops a crush on Ryan, leading Stanley to reprimand Ryan for it after Kelly misleads Stanley about their conversation.";
				MkEpp($season, $episode, $title, $category, $desc);
			
			$season = '2'; $episode = '19'; $title = "Michael\'s Birthday"; $category = ''; $desc = "Michael is excited about his birthday, but the rest of the office is instead focused on Kevin, who is awaiting the results from a skin cancer test. Jim and Pam leave to purchase items to comfort Kevin, and later in the day the entire staff leaves for a day at the ice rink. Michael meets Carol, and makes a good impression when he entertains her kids. Kevin\'s test results come back negative for cancer.";
				MkEpp($season, $episode, $title, $category, $desc);

			$season = '2'; $episode = '20'; $title = "Drug Testing"; $category = ''; $desc = "Dwight finds a leftover joint in the parking lot, and begins an investigation to find the owner. After no one confesses, he schedules a drug test. Michael, worried that he will not pass, pressures Dwight for a cup of clean urine. Dwight is conflicted, but after resigning from his position as a volunteer sheriff\'s deputy, gives in to Michael\'s demands.";
				MkEpp($season, $episode, $title, $category, $desc);

			$season = '2'; $episode = '21'; $title = "Conflict Resolution"; $category = ''; $desc = "Michael learns that Toby keeps files detailing all of the complaints employees have had against each other. Angry that the disputes have not been resolved, Michael reads them out loud, which brings up old conflicts and leaves the employees bitter and angry. Dwight, furious over Jim\'s pranks, tells Michael that he will quit if Jim is not fired. Jim learns of an opening sales position at a different branch, and decides to interview for the job. Pam learns that Jim has complained about her making wedding plans at work.";
				MkEpp($season, $episode, $title, $category, $desc);
			
			$season = '2'; $episode = '22'; $title = "Casino Night"; $category = ''; $desc = 'Michael organizes a casino night for charity, but inadvertently invites two dates, his boss Jan, and Carol. He ends up beginning a relationship with Carol. Jan reacts calmly, but later she leaves early with an overnight bag, revealing that she had intended to stay with Michael. Jim reveals to Pam that he is in love with her, and they share a kiss.';
				MkEpp($season, $episode, $title, $category, $desc);
			
	
	
// SEASON THREE ---------------------------------------------
		

			$season = '3'; $episode = '1'; $title = "Gay Witch Hunt"; $category = ''; $desc = "Months have passed since the end of season two. Jim has transferred to a different branch, and Pam has broken off her engagement with Roy. Michael learns that Oscar is gay, and accidentally outs him to everyone. Feeling bad, Michael hosts a meeting about homosexuality, where he attempts to present himself as open-minded and progressive. Meanwhile, Jim attempts to adjust to life at the Stamford branch, with his new co-workers Andy and Karen.";
				MkEpp($season, $episode, $title, $category, $desc);

			$season = '3'; $episode = '2'; $title = "The Convention"; $category = ''; $desc = "Michael and Dwight leave for a convention in Philadelphia, where they meet Josh, the manager of Dunder-Mifflin Stamford, and Jim. Michael feels threatened by Josh, and attempts to one-up him by throwing a party in his hotel room. When no one shows up, Jim takes pity on Michael and reassures him that he left Scranton for different reasons. Meanwhile, Kelly sets Pam up on a blind date that goes poorly.";
				MkEpp($season, $episode, $title, $category, $desc);

			$season = '3'; $episode = '3'; $title = "The Coup"; $category = ''; $desc = "Michael\'s managerial tactics lead Angela and Dwight to conspire to take Michael\'s job. Dwight meets with Jan, who, after listening to Dwight\'s propositions, later calls to inform Michael that his own employees are conspiring against him. Michael informs Dwight that Jan has promoted him to regional manager in an attempt to make Dwight confess. However, Dwight immediately takes over the office and begins making sweeping changes. Michael, unable to control his anger, reveals to Dwight that he knows everything, and forces Dwight to do his laundry to make it up to him. Meanwhile, at Dunder Mifflin Stamford, Josh\'s managerial tactics include playing Call of Duty as a team-building exercise. Unfortunately, Jim is less than competent at the game.";
				MkEpp($season, $episode, $title, $category, $desc);
	
			$season = '3'; $episode = '4'; $title = "Grief Counseling"; $category = ''; $desc = "Michael learns that his former boss Ed Truck has died. Seeing that his employees are not shaken by the news, Michael begins to ponder his own mortality. While mourning, Michael learns that a bird was killed by flying into a window earlier that morning, and he decides to have a funeral later in the day for the bird. Meanwhile, at Dunder-Mifflin Stamford, Jim and Karen embark on a quest for potato chips.";
				MkEpp($season, $episode, $title, $category, $desc);

			$season = '3'; $episode = '5'; $title = "Inflation"; $category = ''; $desc = "Dwight takes Ryan out to the Schrute Family Beet Farm for an initiation session before his first sales call. The initiation, involving odd styles of hazing and bizarre parables, angers Ryan, who does not make the sale. Back at the office, Jan asks Pam to document Michael\'s activities for a day. Michael, oblivious, spends most of the day waiting in line for a free pretzel in the lobby.";
				MkEpp($season, $episode, $title, $category, $desc);

			$season = '3'; $episode = '6'; $title = "Diwali"; $category = ''; $desc = "Kelly invites the entire staff to a celebration of Diwali, the Hindu Festival of Light. At the festival, Michael is inspired by his conversation with Kelly\'s parents over Hindu marriage customs, and makes an impromptu proposal to his girlfriend Carol. Carol says no, and leaves. In Stamford, Jim, Andy, and Karen stay late to do sales figures. Andy and Jim do shots to pass the time, which leads Karen to have to drive a drunk Jim home.";
				MkEpp($season, $episode, $title, $category, $desc);

			$season = '3'; $episode = '7'; $title = "Branch Closing"; $category = ''; $desc = "Jan informs Michael that the Dunder-Mifflin board has voted to close the Scranton branch, and for the Stamford branch to absorb the remnants of Scranton. Michael announces this to the office, leading the employees to plan for their futures. Michael, in a last-ditch effort to save his branch, leaves with Dwight to surprise CFO David Wallace at his home. They wait outside all day, but David never shows up, and they resign themselves to defeat. However, Josh, the regional manager of the Stamford branch, announces that he is leaving the company to take another job. A decision is made for the Scranton branch to absorb the Stamford branch. Michael and Dwight celebrate, believing that they were the ones who brought about the change.";
				MkEpp($season, $episode, $title, $category, $desc);

			$season = '3'; $episode = '8'; $title = "The Merger"; $category = ''; $desc = "Due to Dunder Mifflin Stamford\'s closing, six members of the staff; Jim, Karen, Andy, Martin, Tony, and Hannah, move and take jobs in Scranton. Michael attempts to welcome his new employees, but naturally ends up alienating and offending them. Andy begins sucking up to Michael, causing Dwight to become jealous. Pam asks Jim out for coffee to catch up, but he turns her down, revealing that he has begun dating Karen. Michael accidentally humiliates Tony, who announces that he is quitting. Michael becomes defensive, and fires him instead.";
				MkEpp($season, $episode, $title, $category, $desc);

			$season = '3'; $episode = '9'; $title = "The Convict"; $category = ''; $desc = "Michael learns that Martin, one of the former Stamford employees, is a former criminal. The staff learns that his time was spent in a white-collar prison, and begins to wonder if Martin\'s prison is better than Dunder Mifflin Scranton. Michael then gives a presentation on the miseries of prison, with most of his ideas fueled from television prisons. Bitter that he is not being taken seriously, he then locks his employees in the conference room. At the end of the day, Martin decides to quit rather than continue working with Michael.";
				MkEpp($season, $episode, $title, $category, $desc);

			$season = '3'; $episode = '10'; $title = "A Benihana Christmas Part 1"; $category = ''; $desc = "Michael plans to invite Carol to Jamaica with him for Christmas, but she breaks up with him before he has a chance. Andy takes Michael to a local Benihana to cheer him up, and they both convince waitresses to come back to the Christmas party with them. Back at the office, a disagreement within the Party Planning Committee leads Karen and Pam to create their own Christmas party, separate from Angela\'s. When the majority of the office decide to go to Karen and Pam\'s party, Angela becomes upset, and seeing this, Karen and Pam decide to combine the parties. Soon after, Michael and Andy\'s dates leave them, but Michael nevertheless finds someone to go to Jamaica with him.";
				MkEpp($season, $episode, $title, $category, $desc);

			$season = '3'; $episode = '11'; $title = "Back From Vacation"; $category = ''; $desc = "Michael returns from Jamaica, and accidentally lets slip that he went with Jan. When he tries to send a revealing picture of Jan to Todd Packer, he inadvertently sends it to the packaging department, and soon the picture is spread throughout the entire company. Jim and Karen have an argument over Karen moving into an apartment close to where Jim lives, until Pam mediates a solution between them. Although she appears happy to have helped, she later cries at the day\'s end. Jan appears at the office and tells Michael that she wants a relationship. She has yet to find out about the picture.";
				MkEpp($season, $episode, $title, $category, $desc);

			$season = '3'; $episode = '12'; $title = "Traveling Salesmen"; $category = ''; $desc = "Dwight arrives late for an early morning meeting, where Michael announces that the members of the sales staff are teaming up for sales calls, in an Amazing Race-esque challenge. Andy spends the day trying to convince Michael that Dwight is untrustworthy. Meanwhile, Kevin announces to Angela that their sales reports weren\'t mailed to New York, but Angela assures him that the problem was handled. When the teams return, Andy discovers that Dwight\'s morning tardiness was due to delivering the reports to New York for Angela. Dwight, instead of revealing their relationship, resigns his position.";
				MkEpp($season, $episode, $title, $category, $desc);

			$season = '3'; $episode = '13'; $title ="The Return"; $category = ''; $desc = "Oscar\'s return from his vacation prompts Michael to host a Mexican-themed party. Meanwhile, Jim and Pam steal Andy\'s phone, and repeatedly call it, playing his homemade ring tone over and over. Andy becomes more angry each time the phone rings, and eventually punches a hole in the wall out of frustration. Michael, distraught over Dwight\'s resignation in the previous episode, leaves and confronts him at Staples, inviting him back to Dunder Mifflin. After being confronted by Karen, Jim reveals to her that he still has feelings for Pam. Andy is sent to anger management training.";
				MkEpp($season, $episode, $title, $category, $desc);

			$season = '3'; $episode = '14'; $title ="Ben Franklin" ; $category = ''; $desc = "The women of the office hold a bridal shower for Phyllis, while the men hold a bachelor\'s party for her groom-to-be, Bob Vance. After being convinced to hire a stripper for both the men and the women\'s parties by Todd Packer, Michael orders Jim and Dwight to choose the strippers. For the men\'s party, Dwight hires a stripper, while for the women\'s party, Jim hires a Ben Franklin impersonator.";
				MkEpp($season, $episode, $title, $category, $desc);

			$season = '3'; $episode = '15'; $title = "Phyllis\'s Wedding"; $category = ''; $desc = "Phyllis lets Michael be a part of her wedding in return for allowing her to take extra time off work for her honeymoon. Michael attempts to dominate the festivities, and acts as the host of their reception. Pam is incredulous to see Phyllis has used most of the plans for Pam and Roy\'s wedding. Feeling lonely, she strikes up conversation with Roy, and they leave the wedding together.";
				MkEpp($season, $episode, $title, $category, $desc);

			$season = '3'; $episode = '16'; $title = "Business School"; $category = ''; $desc = "For extra credit, Ryan invites Michael to his business school as a guest speaker. Michael attempts to make a motivational speech, unaware that Ryan has introduced him as an ineffectual manager of an out of touch company. Meanwhile, a bat is discovered in the office, leading Dwight to lead an attempt to capture it. That night, Pam displays her artwork at an art show, and is disappointed when few of her co-workers attend. Michael soon arrives after giving his speech and, in a moment of genuine kindness, compliments her work and buys her painting of their office building.";
				MkEpp($season, $episode, $title, $category, $desc);

			$season = '3'; $episode = '17'; $title = "Cocktails"; $category = ''; $desc = "The Dunder-Mifflin CFO David Wallace holds a cocktail party at his house, which Jan, Michael, Jim, Karen and Dwight attend. Michael\'s antics around their \'coming out\' appear to annoy Jan, but she later attempts to have sex with him in a bathroom. Michael feels uncomfortable and turns her down, angering her. Meanwhile Dwight assesses the structural soundness of the house. While at a bar, Pam reveals to Roy that Jim came on to her. Roy is infuriated and proceeds to trash the bar, assisted by his brother. Pam immediately breaks up with Roy, who then says he\'s going to kill Jim.";
				MkEpp($season, $episode, $title, $category, $desc);

			$season = '3'; $episode = '18'; $title = "The Negotiation"; $category = ''; $desc = "Roy enters the office and attempts to attack Jim, but Dwight\'s timely intervention with pepper spray saves the day. Jim attempts to thank Dwight for saving him, but is frustrated when Dwight refuses to accept his thanks. Meanwhile, Michael and Darryl attempt to get a pay raise from Jan in New York.";
				MkEpp($season, $episode, $title, $category, $desc);

			$season = '3'; $episode = '19'; $title = "Safety Training"; $category = ''; $desc = "Michael feels ashamed when, during a safety training course, the warehouse employees make fun of him for having a safer work environment. Determined to show that office life can be dangerous, he decides to fake a suicide attempt. His plan to jump off of the roof and onto a bouncy castle go awry when the employees discover what he is doing and are forced to talk him down. Meanwhile, Andy attempts to endear himself to his co-workers after returning from anger management.";
				MkEpp($season, $episode, $title, $category, $desc);

			$season = '3'; $episode = '20'; $title = "Product Recall"; $category = ''; $desc = "Paper from Dunder-Mifflin Scranton with an obscene cartoon watermark left by a disgruntled papermill ex-employee are accidentally sent out, throwing the business into damage control. The accountants attempt to provide service for angry customers, while Michael contacts the media in a misguided attempt to avoid scandal. Meanwhile, Jim and Andy go to a local high school to apologize personally to the principal, and they bump into Andy\'s girlfriend, who turns out to be a student there.";
				MkEpp($season, $episode, $title, $category, $desc);

			$season = '3'; $episode = '21'; $title = "Women\'s Appreciation"; $category = ''; $desc = "After Phyllis is the victim of a flashing in the parking lot, Michael attempts to host a seminar on women\'s issues. When it doesn\'t go as expected, he takes the women of the office on a trip to the mall, while Dwight and Andy search for the flasher and distribute flyers. At the mall, Michael discusses his discomfort in his relationship with Jan, and the women advise him to break up with her. As Michael breaks up with Jan via voicemail, she suddenly arrives at the office.";
				MkEpp($season, $episode, $title, $category, $desc);

			$season = '3'; $episode = '22'; $title = "Beach Games"; $category = ''; $desc = "David Wallace calls and informs Michael that he is a candidate for an opening position in the corporate office in New York. Believing himself the obvious choice for the job, Michael goes about the task of choosing a successor. He takes his employees to the beach and compells them to compete in challenges to determine which of them will take over his position, not realizing that Jim and Karen are also contenders for the job. Pam, on a high after a firewalk, confesses that she is tired of being ignored, and tells Jim that he was the reason she called off her wedding.";
				MkEpp($season, $episode, $title, $category, $desc);

			$season = '3'; $episode = '23'; $title = "The Job"; $category = ''; $desc = "Michael decides to repel any advances that Jan makes towards him, but instantly changes his mind and gives her a second chance once he sees her with enhanced breasts. Michael, Jim, and Karen then all travel to New York to interview for the position that is opening in the corporate office. Before he leaves, Michael names Dwight as his successor in Scranton, and Dwight, with Andy as his new number two, immediately goes about changing the appearance and structure of the office. In New York, Michael\'s interview ends as he learns that the new position is linked to Jan\'s upcoming dismissal. Jan learns of the move, and confronts David, with Michael following her. Jan, now unemployed, decides to move in with a hesitant Michael, who now returns to his position as Scranton manager. Jim\'s interview goes well, until he finds a good-luck memento left for him by Pam. Realizing he cannot leave her again, he returns to the office alone, where he asks her on a date. The corporate job is given to Ryan, who then immediately breaks up with Kelly.";
				MkEpp($season, $episode, $title, $category, $desc);
			
	
// SEASON FOUR --------------------------------------------------------------
			$season = '4'; $episode = '1'; $title = "Fun Run"; $category = ''; $desc = "After Michael hits Meredith with his car in the carpark of Dunder Mifflin Scranton, she learns she is infected with rabies. Angela asks Dwight to care for her sick cat, but Dwight mercy-kills the animal, leading to relationship problems. After being videoed in public by the camera crew, Pam announces that she and Jim are now dating, but they do not share this with their co-workers. Feeling guilty about the incident with Meredith, Michael decides to host \'Michael Scott’s Dunder Mifflin Scranton Meredith Palmer Memorial Celebrity Rabies Awareness Pro-Am Fun Run Race For The Cure\', although his employees are less than enthused. Toby wins the race, and a depressed and dehydrated Michael is finally forgiven by Meredith.";
				MkEpp($season, $episode, $title, $category, $desc);

			$season = '4'; $episode = '2'; $title = "Dunder Mifflin Infinity"; $category = ''; $desc = "Jim and Pam\'s relationship is outed to the rest of the office after Toby files a PDA complaint. Ryan returns to the offices for the first time since his promotion to introduce \'Dunder Mifflin Infinity\', his plan to use technology to revitalize the uncompetitive company. Creed warns Michael of the possible effects this change will have with older workers, leading Michael to hold an \'ageism seminar\'. Meanwhile, Kelly tries to trick Ryan into getting back together with her. Michael, believing the personal touch is more important than technology, leaves with Dwight to present food gift baskets to seven former clients to try to win them back. After presenting six of the baskets with no luck, Michael, unable to properly understand his rental car\'s GPS, drives it into Lake Scranton.";
				MkEpp($season, $episode, $title, $category, $desc);

			$season = '4'; $episode = '3'; $title = "Launch Party"; $category = ''; $desc = "As the new brainchild of Ryan, the new Dunder Mifflin Infinity website, is about to be released, the staff of Dunder Mifflin Scranton prepare to host a party as part of a company-wide video chat room. Dwight, wanting to prove to Angela that he can beat technology, tries to outsell the new computer, which he ultimately does. Later, at the party, Dwight and Michael kidnap a pizza delivery boy, although they later release him. At the end of the chat room, Michael humiliates Ryan in front of every branch of Dunder Mifflin. Andy decides to pursue Angela, to Dwight\'s dismay.";
				MkEpp($season, $episode, $title, $category, $desc);

			$season = '4'; $episode = '4'; $title = "Money"; $category = ''; $desc = "When Jan, now living with Michael in his condominium, forces costly changes in Michael\'s life, he worries about his financial situation. To remedy the problem, Michael leaves work early for a late night job as a telemarketer until 1 a.m. When Ryan finds out, he forces Michael to quit, who then fears that there is no way in which he can support Jan and himself. He hops a train to run away, but Jan meets him and tells him that they can work together to find a way to live. Meanwhile, Dwight pines over Angela, who is later asked out by Andy. After a pep-talk by Jim, Dwight returns as his normal annoying self, to Jim\'s pleasure. Pam and Jim visit Dwight\'s family farm, which he has fashioned into a bed and breakfast.";
				MkEpp($season, $episode, $title, $category, $desc);

			$season = '4'; $episode = '5'; $title = "Local Ad"; $category = ''; $desc = "Although informed that he and his employees can only be in the Dunder Mifflin Infinity commercial for a few seconds, Michael decides to produce a full commercial with the Scranton staff. Meanwhile, the progression of Andy and Angela\'s relationship forces Dwight to sink into a depression, where he attempts to remove himself from his life by playing Second Life. Although rebuffed by the corporate office, Michael\'s rejected version of the Scranton commercial is well received by both the employees as well as other bar patrons at Poor Richard\'s.";
				MkEpp($season, $episode, $title, $category, $desc);

			$season = '4'; $episode = '6'; $title = "Branch Wars"; $category = ''; $desc = "Karen, now Regional Manager of Dunder Mifflin Utica, attempts to lure Stanley away from Dunder Mifflin Scranton. Pranking Karen for her attempt, Michael and Dwight trick Jim into accompanying them on a \'panty raid\' to Utica. When they are discovered, Karen scolds them and is further angered when Jim informs her that he and Pam are now dating. Back at Scranton, Michael bids Stanley goodbye, who then tells Michael he\'s decided to stay, revealing that he only said he had left to try to get a raise.";
				MkEpp($season, $episode, $title, $category, $desc);

			$season = '4'; $episode = '7'; $title = "Survivor Man"; $category = ''; $desc = "When Michael is not invited to a company wilderness retreat hosted by Ryan, he decides to prove that he has the ability to survive on his own. Dwight drops Michael in the middle of a forest, and although told to leave, stays to prevent Michael from injury. When Michael almost eats poisonous mushrooms, Dwight jumps out to save him just in time. Meanwhile, back at the office, Jim, as the number two, decides to combine birthday parties for three members of the staff whose birthdays fall in quick succession. The plan, though, is poorly received by the staff, and Jim returns to having individual birthdays just as Michael and Dwight come back.";
				MkEpp($season, $episode, $title, $category, $desc);

			$season = '4'; $episode = '8'; $title = "The Deposition"; $category = ''; $desc = "Michael is thrown in the middle of a deposition between Dunder Mifflin and his girlfriend Jan after Jan sues the company for wrongful termination. Although the case initially goes well for Jan, Michael\'s actions lead to Dunder Mifflin easily getting the upper hand. Meanwhile, back at Dunder Mifflin Scranton, a ping pong craze turns into a battle of the relationships between Pam and Jim and Kelly and Darryl.";
				MkEpp($season, $episode, $title, $category, $desc);

			$season = '4'; $episode = '9'; $title = "Dinner Party"; $category = ''; $desc = "Michael and Jan invite Jim, Pam, Andy, and Angela to a dinner party at the couple\'s condominium. When Michael and Jan begin to argue after the discussion of having children arises, the party\'s guests go to various measures to try to escape. The party is thrown into further confusion when Dwight, still pining for Angela, arrives with his former babysitter as his date. As the fighting between Michael and Jan escalates, the police are eventually called by a neighbor. The party culminates with Michael leaving Jan.";
				MkEpp($season, $episode, $title, $category, $desc);

			$season = '4'; $episode = '10'; $title = "Chair Model"; $category = ''; $desc = "After seeing a model in a catalog while searching for a chair, Michael realizes that he has not accomplished his dream of finding a soul mate in life. Dwight embarks on a search for the chair model, while Michael takes names of friends of office employees for dates. Michael goes on a blind date with Pam\'s landlady, which ends poorly. Meanwhile, Andy and Kevin meet with the bosses of the other companies in the building to discuss the issues of parking, while Jim and Pam discuss the future of their relationship.";
				MkEpp($season, $episode, $title, $category, $desc);

			$season = '4'; $episode = '11'; $title = "Night Out"; $category = ''; $desc = "Michael and Dwight decide to surprise Ryan in New York and to meet his friends. They find him clubbing and join him for the night. Ryan is surprisingly friendly, though it could be a side effect of his cocaine habit. Meanwhile, the Scranton branch is upset when they find out they have to come in on a Saturday for Ryan\'s website project. Jim suggests that everyone work late instead. The plan goes well — until they find they are locked in on the grounds with no way to escape. Toby lets slip his affection for Pam, and impulsively announces he will be moving to Costa Rica.";
				MkEpp($season, $episode, $title, $category, $desc);

			$season = '4'; $episode = '12'; $title = "Did I Stutter?"; $category = ''; $desc = "When Stanley snaps at Michael during a meeting, Michael tries to give Stanley an attitude adjustment. Michael\'s plan to fake-fire Stanley only worsens the situation. To punish Andy for his relationship with Angela, Dwight lowballs Andy to buy his car and then resells it for a profit. Meanwhile, Pam deals with unwanted attention from her \'back up\' glasses after spending the night at Jim’s. Jim receives a formal warning from Ryan about his job performance.";
				MkEpp($season, $episode, $title, $category, $desc);

			$season = '4'; $episode = '13'; $title = "Job Fair"; $category = ''; $desc = "In response to Ryan\'s warning, Jim hits the links with Andy and Kevin to attempt to land his biggest client ever. Michael, Pam, Oscar, and Darryl set up a booth at a job fair at Pam\'s old high school to find applicants for Dunder Mifflin’s summer internship, but Michael\'s shenanigans produce failure. When all the other office workers duck out early, Dwight and Angela have a tense day alone in the office. Pam investigates graphic arts opportunities which may take her away from Scranton.";
				MkEpp($season, $episode, $title, $category, $desc);

			$season = '4'; $episode = '14'; $title = "Goodbye Toby"; $category = ''; $desc = "After Angela refuses to give in to Michael\'s unreasonable demands, Phyllis takes over the party planning committee and throws a huge bash for Toby\'s goodbye party. Dwight, with Meredith, hazes the new HR woman, Holly Flax (Amy Ryan), making her think Kevin is mentally disabled. Holly and Michael seem to make a romantic connection, which is cut short when Jan returns from Arizona, pregnant from a sperm donor; Michael ambivalently agrees to help her through the birth process. Pam accepts a three month training program in New York, and just as Jim is about to propose to her, Andy publicly proposes to Angela who reluctantly agrees. Angela is later caught having sex with Dwight in the office. Ryan\'s downfall is complete as he is dragged from the New York office after committing fraud related to the website.";
				MkEpp($season, $episode, $title, $category, $desc);
			
	
// SEASON FIVE --------------------------------------------------------------

			$season = '5'; $episode = '1'; $title = "Weight Loss Part:1"; $category = ''; $desc = "Over eight weeks of the summer, a Dunder Mifflin weight-loss initiative causes the branch to diet and become obsessed with their weight. Michael pursues a friendship with his new HR rep, Holly. Andy plans his wedding to Angela, while she continues her affair with Dwight. Jim misses Pam who attends art school in New York, and he finally proposes. A disgraced Ryan returns to the Scranton office as a temp.";
				MkEpp($season, $episode, $title, $category, $desc);

			$season = '5'; $episode = '2'; $title = "Weight Loss Part:2"; $category = ''; $desc = "Over eight weeks of the summer, a Dunder Mifflin weight-loss initiative causes the branch to diet and become obsessed with their weight. Michael pursues a friendship with his new HR rep, Holly. Andy plans his wedding to Angela, while she continues her affair with Dwight. Jim misses Pam who attends art school in New York, and he finally proposes. A disgraced Ryan returns to the Scranton office as a temp.";
				MkEpp($season, $episode, $title, $category, $desc);

			$season = '5'; $episode = '3'; $title = "Business Ethics"; $category = ''; $desc = "Following Ryan\'s recent scandal, Holly holds an ethics seminar. Everyone speaks freely about their unethical behavior at work and Meredith causes a rift between Michael and Holly when Meredith admits a supplier gives her discounts on products and steak coupons in exchange for sex. Holly is ostracized by the staff, but when she is humiliated by the head of Human Resources, Michael once again supports her. Meanwhile, Jim makes Dwight comply with the company\'s \'time theft\' policy by timing every second of his personal activity.";
				MkEpp($season, $episode, $title, $category, $desc);

			$season = '5'; $episode = '4'; $title = "Baby Shower"; $category = ''; $desc = "Michael practices for the birth of Jan’s baby by having Dwight go over possible birthing scenarios. When Jan arrives for the office baby shower, she has already had baby Astrid, excluding Michael from the process, and he feels disconnected from the baby. Meanwhile, Michael pretends to dislike Holly for Jan’s benefit, but Jan senses their connection and asks Michael not to date Holly. Michael goes to Holly for comfort and they agree to date. The separation between Jim and Pam starts to take a toll on their relationship.";
				MkEpp($season, $episode, $title, $category, $desc);

			$season = '5'; $episode = '5'; $title = "Crime Aid"; $category = ''; $desc = "Michael and Holly have sex in the office on a date and inadvertently lead to the office being robbed. Michael holds an auction to raise money for all the items lost. On Phyllis\'s advice, Dwight gives Angela an ultimatum to break up with Andy, which she refuses to do. Pam gets a part-time job at corporate to pay for art school, and Jim is further unsettled after Roy insinuates that he is losing her.";
				MkEpp($season, $episode, $title, $category, $desc);

			$season = '5'; $episode = '6'; $title = "Employee Transfer"; $category = ''; $desc = "When corporate transfers Holly to Nashua, Michael (with Darryl\'s help) moves her back to New Hampshire. Their plans to continue dating are dashed and they break up, and Darryl teaches Michael to sing the blues. Pam meets Jim\'s brothers, who pull a prank on Jim, which embarrasses her. Dwight torments Andy by becoming a fan of Cornell University. Pam is embarrassed when she is the only person at corporate wearing a costume on Halloween.";
				MkEpp($season, $episode, $title, $category, $desc);

			$season = '5'; $episode = '7'; $title = "Customer Survey"; $category = ''; $desc = "Dwight and Jim are shocked when they receive poor marks on their annual customer survey reports. They learn that Kelly has sabotaged their scores for blowing off her America\'s Got Talent wrap party. A sympathetic Michael and Kelly relish their discomfort. Through Angela\'s manipulations, she and Andy book their wedding at Schrute Farms B&B. Pam and Jim spend every minute together using their Bluetooth phones, including Jim overhearing Pam\'s friend Alex asking her to stay in New York.";
				MkEpp($season, $episode, $title, $category, $desc);

			$season = '5'; $episode = '8'; $title = "Business Trip"; $category = ''; $desc = "CFO David Wallace sends Michael to Winnipeg, Manitoba for business. Andy and Oscar accompany him and become unlikely friends when they drunk dial Angela. Although Michael makes the sale and has a one-night stand, he rebukes David for transferring Holly. Jim counts down the days until Pam gets back from art school; she fails a course but comes back to Scranton anyway. Ryan seduces Kelly, who in turn breaks up with Darryl.";
				MkEpp($season, $episode, $title, $category, $desc);

			$season = '5'; $episode = '9'; $title = "Frame Toby"; $category = ''; $desc = "HR Rep Toby returns from Costa Rica, driving Michael insane. He and Dwight attempt to get Toby fired for cause by planting \'drugs\' (actually caprese salad) in Toby\'s desk. Pam is upset that someone in the office has made a mess in the microwave and will not clean it up. Jim surprises Pam by buying his parents\' old house; despite its \'70s decor, Pam loves it. Ryan breaks up with Kelly to travel to Thailand.";
				MkEpp($season, $episode, $title, $category, $desc);

			$season = '5'; $episode = '10'; $title = "The Surplus"; $category = ''; $desc = "The office must spend a $4,300 surplus or lose it in next year\'s budget. Factions break out and court Michael to get what they want—Oscar and Jim want a new photocopier, Pam, Stanley, and others want new chairs. They finally agree on the chairs to prevent Michael from earning a bonus by returning the surplus. Dwight takes Angela and Andy to Schrute Farms to settle wedding plans. In a mock ceremony, Dwight secretly weds Angela. Angered at his deception, she plans to have the wedding annulled.";
				MkEpp($season, $episode, $title, $category, $desc);

			$season = '5'; $episode = '11'; $title = "Moroccan Christmas"; $category = ''; $desc = "Phyllis\'s Moroccan-themed holiday party is interrupted when Meredith\'s hair catches on fire during a drunken bellydance; Michael stages an intervention and attempts to force Meredith into rehab. Dwight makes a killing selling a popular Christmas toy—\'Princess Unicorn\'. Phyllis continues to torment Angela on the Party Planning Committee. When she revolts, Phyllis shocks everyone by revealing Angela and Dwight\'s affair to everyone (except Andy).";
				MkEpp($season, $episode, $title, $category, $desc);

			$season = '5'; $episode = '12'; $title = "The Duel"; $category = ''; $desc = "The office is tense because Andy still has not found out about Angela\'s affair with Dwight. After Michael tells him, Dwight and Andy plan a duel. When they realize Angela has been sleeping with them both, each dumps her. In New York, Michael travels to corporate to meet with David Wallace, who wants to know Michael\'s methods as the Scranton branch is actually doing well. Not surprisingly, Michael has no insight.";
				MkEpp($season, $episode, $title, $category, $desc);

			$season = '5'; $episode = '13'; $title = "Prince Family Paper"; $category = ''; $desc = "By request of David Wallace, Michael and Dwight go undercover to investigate rival paper company Prince Paper. As they are a small, family-owned operation made of an extremely nice family, Michael has a difficult time handing over their findings to Wallace. Meanwhile, the rest of the office holds a debate to settle a question: is Hilary Swank hot? The office is tied six to six when Michael off-handedly casts the winning vote for \'yes\'.";
				MkEpp($season, $episode, $title, $category, $desc);

			$season = '5'; $episode = '14'; $title = "Stress Relief Part:1"; $category = ''; $desc = "Dwight stages a fire drill which causes a panic and Stanley has a heart attack. With stress levels high, Michael tries a number of ways to get his employees to relax before discovering that he is the number one cause of stress at work. He stages on a no-holds-barred roast of himself, but feels hurt at the jokes. Andy, Pam and Jim watch a pirated movie with special guest stars Jack Black, Jessica Alba, and Cloris Leachman. Pam\'s parents are going through marital troubles and separate after her dad hears how much Jim loves Pam.";
				MkEpp($season, $episode, $title, $category, $desc);

			$season = '5'; $episode = '15'; $title = "Stress Relief Part:2"; $category = ''; $desc = "Dwight stages a fire drill which causes a panic and Stanley has a heart attack. With stress levels high, Michael tries a number of ways to get his employees to relax before discovering that he is the number one cause of stress at work. He stages on a no-holds-barred roast of himself, but feels hurt at the jokes. Andy, Pam and Jim watch a pirated movie with special guest stars Jack Black, Jessica Alba, and Cloris Leachman. Pam\'s parents are going through marital troubles and separate after her dad hears how much Jim loves Pam.";
				MkEpp($season, $episode, $title, $category, $desc);

			$season = '5'; $episode = '16'; $title = "Lecture Circuit Part:1"; $category = ''; $desc = "Michael goes on a speaking tour of the other branches to explain Scranton\'s relative success, accompanied by his driver, Pam. At the Utica branch, the speech goes poorly, but Pam and a married, pregnant Karen reach closure, inspiring Michael to travel to the Nashua branch for closure with Holly. Back at the office, Dwight and Jim — now the heads of the party planning committee — forget Kelly\'s birthday, and attempt to make amends. Andy develops a crush on Stanley\'s client.";
				MkEpp($season, $episode, $title, $category, $desc);

			$season = '5'; $episode = '17'; $title = "Lecture Circuit Part:2"; $category = ''; $desc = "In part two, Michael and Pam arrive in Nashua, where Holly is off a few days. Michael feels devastated when he learns she has a new boyfriend and Pam is forced to finish the lecture. Michael finds a computer file addressed to him; Pam reads it and tells him that Holly still cares for him. Dwight and Jim continue to struggle to throw Kelly a party, but ultimately make her happy. Angela\'s new nanny cam causes a stir when the staff see her bizarre interaction with her pets.";
				MkEpp($season, $episode, $title, $category, $desc);

			$season = '5'; $episode = '18'; $title = "Blood Drive"; $category = ''; $desc = "It\'s Valentine\'s Day at the office. Michael is attracted to a woman who loses a glove at a Valentine\'s blood drive; Cinderella-like, he tries to track her down. The staff share their worst break-up stories and band together to host a \'Lonely Hearts Party\' where they root for Michael\'s would-be romance. Jim and Pam have lunch with Phyllis and Bob Vance, which turns awkward when they hear the Vances having sex in the bathroom.";
				MkEpp($season, $episode, $title, $category, $desc);

			$season = '5'; $episode = '19'; $title = "Golden Ticket"; $category = ''; $desc = "Michael causes a huge problem when he comes up with the idea to put \'golden tickets\' into packages of paper for clients to redeem for discounts, inspired by Willy Wonka & the Chocolate Factory. David is angered, so Michael tries to pin the blame on Dwight. Andy, Jim, and Pam give Kevin differing advice on wooing Lynne, the woman he met at the Valentine\'s mixer.";
				MkEpp($season, $episode, $title, $category, $desc);

			$season = '5'; $episode = '20'; $title = "New Boss"; $category = ''; $desc = "Michael clashes with the new, no-nonsense Regional Vice President Charles Miner (guest star Idris Elba), who goes so far as to dissolve the party planning committee and cancel Michael\'s 15th anniversary party. Jim gets off on the wrong foot with Charles as well when caught in a prank. Meanwhile, both Kelly and Angela develop crushes on Charles. After confronting David Wallace about his party, Michael quits Dunder-Mifflin.";
				MkEpp($season, $episode, $title, $category, $desc);

			$season = '5'; $episode = '21'; $title = "Two Weeks"; $category = ''; $desc = "As Michael wraps up his two final weeks, he goofs off even more than usual. Pam feels unfullfilled despite success at programming the new photocopier. When Michael decides to open his own paper company (with none of the staff joining him despite his pleas), an angry Charles has him escorted off the premises—only to have Pam join in his new venture in sales.";
				MkEpp($season, $episode, $title, $category, $desc);

			$season = '5'; $episode = '22'; $title = "Dream Team"; $category = ''; $desc = "Michael and Pam use a list-based agenda to struggle through establishing their new company, including establishing an office in the Dunder-Mifflin building and hiring a bleach blond Ryan and briefly, Vikram from Michael\'s telemarketing job. Dwight goads Jim into facing off with Charles in a soccer match when he joins in his officemates\' brownnosing over Charles\' sports passion. Michael is soon able to convert a large closet in the Business Park building into his office headquarters.";
				MkEpp($season, $episode, $title, $category, $desc);

			$season = '5'; $episode = '23'; $title = "Michael Scott Paper Company"; $category = ''; $desc = "Michael, Pam, and Ryan chafe working in such close quarters. After hosting a Paper & Pancakes luncheon, they are about to call it quits when Pam makes her first sale for the company. Dwight and Andy\'s unlikely friendship is tested when they are both attracted to the new receptionist Erin. Jim spends his day trying to figure out what Charles means by his requested \'run down\'. Includes an alternate title sequence featuring The Michael Scott Paper Company.";
				MkEpp($season, $episode, $title, $category, $desc);

			$season = '5'; $episode = '24'; $title = "Heavy Competition"; $category = ''; $desc = "Dwight, finding a new hero in Charles, clashes with Michael as each tries to steal the other\'s clients. After trying to sell Jim and Pam on his failed wedding plans, Andy tries to provide for all of Jim\'s emotional needs. Jim takes the opportunity to prank Andy, but also reassures him he will find love again.";
				MkEpp($season, $episode, $title, $category, $desc);

			$season = '5'; $episode = '25'; $title = "Broke"; $category = ''; $desc = "Jim learns Charles is a suckup while Charles finally recognizes Dwight\'s bizarre personality. Although Michael, Pam, and Ryan have landed a number of clients, they learn their company\'s business model will not sustain beyond a month and they will fail. David Wallace investigates the seeming success of Michael\'s company, and Michael, Pam, and Ryan hide their failure long enough to engineer a buyout. Michael is given his old job back, and Pam and Ryan are given jobs in sales.";
				MkEpp($season, $episode, $title, $category, $desc);

			$season = '5'; $episode = '26'; $title = "Casual Friday"; $category = ''; $desc = "Michael mediates a dispute over customers between \'new employees\' Pam and Ryan and the others on the sales team. Pam and Ryan are forced to return the customers and with fewer customers, Michael is forced to fire one of them. Pam is kept on as Ryan is once again a temp. Meanwhile, Toby confronts several employees who take the term casual Fridays too loosely.";
				MkEpp($season, $episode, $title, $category, $desc);

			$season = '5'; $episode = '27'; $title = "Cafe Disco"; $category = ''; $desc = "To break the staff of the focus Charles instilled in them, Michael opens a cafe-disco in the downstairs office to release stress. While initially resistant, all the staff (even Angela) join as Kelly and Andy bond in a dance-off. Pam and Jim plan to elope but later reconsider. Phyllis suspects Bob will have an affair, but drops her suspicions as they sound absurd saying them aloud.";
				MkEpp($season, $episode, $title, $category, $desc);

			$season = '5'; $episode = '28'; $title = "Company Picnic"; $category = ''; $desc = "At the annual Dunder Mifflin company picnic, Michael and Holly are reunited. They perform a skit where they inappropriately announce the closing of the Buffalo branch, but Michael fails to tell her that he loves her. The Scranton branch plays well in the volleyball tournament. While getting an x-ray for a sprained ankle, Pam (with Jim) learns that she is pregnant.";
				MkEpp($season, $episode, $title, $category, $desc);

			$season = '5'; $episode = '29'; $title = "Company Picnic"; $category = ''; $desc = "At the annual Dunder Mifflin company picnic, Michael and Holly are reunited. They perform a skit where they inappropriately announce the closing of the Buffalo branch, but Michael fails to tell her that he loves her. The Scranton branch plays well in the volleyball tournament. While getting an x-ray for a sprained ankle, Pam (with Jim) learns that she is pregnant.";
				MkEpp($season, $episode, $title, $category, $desc);
			
// SEASON SIX --------------------------------------------------------------

			$season = '6'; $episode = '1'; $title = "Gossip"; $category = ''; $desc = "As the summer interns prepare to depart, the office gossips about them and Michael feels left out. Michael discovers that Stanley is having an affair, and tells everyone. When Michael realizes the damage he\'s caused, he fabricates numerous other rumors to discredit himself, including that Andy is gay (confusing Andy) and that Pam is pregnant (unbeknownst to him that she is actually pregnant). As Michael tries to clear the air, Jim and Pam admit their rumor is true in an attempt to save Stanley from embarrassment.";
				MkEpp($season, $episode, $title, $category, $desc);

			$season = '6'; $episode = '2'; $title = "The Meeting"; $category = ''; $desc = "Jim submits a plan for promotions for himself and Michael to David which Michael manages to bungle. Dwight and Toby investigate Darryl\'s worker\'s comp claim. Pam struggles to gather responses for her wedding. Ultimately, Jim and Michael are made co-manager to Dwight\'s horror.";
				MkEpp($season, $episode, $title, $category, $desc);

			$season = '6'; $episode = '3'; $title = "The Promotion"; $category = ''; $desc = "Jim and Michael\'s management styles clash, especially after David\'s budget will only allow a small or no raise this year. Dwight fails in his attempt to raise allies against Jim. Pam feels awkward asking for cash instead of wedding gifts.";
				MkEpp($season, $episode, $title, $category, $desc);

			$season = '6'; $episode = '4'; $title = "Niagra Part:1"; $category = ''; $desc = "The Office travels to Niagara Falls to celebrate Jim and Pam\'s wedding. Pam\'s meemaw is upset when she learns Pam is pregnant. Michael and Dwight try to hook up with guests at the wedding. Dwight succeeds with Pam\'s Maid of Honor, Isabel, but Michael, who failed to reserve a room, ends up sleeping next to an ice machine. Andy injures his scrotum while dancing the night before the wedding. Jim and Pam delay the wedding when they sneak off to marry on the Maid of the Mist, allowing them to calm their nerves and enjoy their wedding. Michael spends the evening after the wedding with Pam\'s mother, Helene.";
				MkEpp($season, $episode, $title, $category, $desc);

			$season = '6'; $episode = '5'; $title = "Niagra Part:2"; $category = ''; $desc = "The Office travels to Niagara Falls to celebrate Jim and Pam\'s wedding. Pam\'s meemaw is upset when she learns Pam is pregnant. Michael and Dwight try to hook up with guests at the wedding. Dwight succeeds with Pam\'s Maid of Honor, Isabel, but Michael, who failed to reserve a room, ends up sleeping next to an ice machine. Andy injures his scrotum while dancing the night before the wedding. Jim and Pam delay the wedding when they sneak off to marry on the Maid of the Mist, allowing them to calm their nerves and enjoy their wedding. Michael spends the evening after the wedding with Pam\'s mother, Helene.";
				MkEpp($season, $episode, $title, $category, $desc);

			$season = '6'; $episode = '6'; $title = "Mafia"; $category = ''; $desc = "Michael meets with an insurance salesman and is convinced by Dwight and Andy that he is part of the mafia. The staff constantly call Jim and Pam on their honeymoon, until finally Kevin accidentally cancels Jim\'s credit card.";
				MkEpp($season, $episode, $title, $category, $desc);

			$season = '6'; $episode = '7'; $title = "The Lover"; $category = ''; $desc = "Jim and Pam return from their honeymoon and are shocked when Michael reveals he is dating Helene, Pam\'s mother. Pam is incensed and openly berates Michael. Dwight attempts to bug Jim\'s office in his plan to sabotage Jim.";
				MkEpp($season, $episode, $title, $category, $desc);

			$season = '6'; $episode = '8'; $title = "Koi Pond"; $category = ''; $desc = "While on the way to a business meeting, Michael falls into a koi pond. The staff tease him so he holds an anti-bullying seminar. Pam and Andy go cold-calling to stir up some new business; they reluctantly use clients\' mistaking them as a couple to their advantage.";
				MkEpp($season, $episode, $title, $category, $desc);

			$season = '6'; $episode = '9'; $title = "Double Date"; $category = ''; $desc = "Jim and Pam reluctantly lunch with Michael and Helene for her birthday. However, when Michael learns Helene\'s age, he dumps her, infuriating Pam even more. She slaps Michael in the parking lot after work. Dwight tries to curry favors from everyone in the office to help him overthrow Jim.";
				MkEpp($season, $episode, $title, $category, $desc);

			$season = '6'; $episode = '10'; $title = "Murder"; $category = ''; $desc = "The Dunder-Mifflin staff are troubled by renewed rumors of insolvency. Michael forces the office into a day of diversions, primarily playing a murder mystery role-playing game. Andy awkwardly attempts to court Erin.";
				MkEpp($season, $episode, $title, $category, $desc);

			$season = '6'; $episode = '11'; $title = "Shareholder Meeting"; $category = ''; $desc = "Michael is excited when he\'s invited by David Wallace to attend the Dunder Mifflin shareholder meeting in New York; he is dismayed by the hostile crowd and causes the board of directors even more trouble. Jim finds he is being undermined by Ryan who refuses to do work, so Jim decides to make an example of him in front of the staff. As Michael, Dwight and Oscar leave New York in a hired limousine, a news ticker shows a steep drop in Dunder Mifflin\'s stock price.";
				MkEpp($season, $episode, $title, $category, $desc);

			$season = '6'; $episode = '12'; $title = "Scott\'s Tots"; $category = ''; $desc = "Michael must renege on a promise he made to a group of kids ten years ago to pay for their college tuition. However, in spite of his mean treatment, Erin proves a source of support. Meanwhile, Jim falls victim to one of Dwight\'s schemes to get him fired: creation of an employee of the month program. Although the staff and David are angered when Dwight rigs the winners to be Jim and Pam, Jim survives. Ryan joins forces with Dwight to bring down Jim.";
				MkEpp($season, $episode, $title, $category, $desc);

			$season = '6'; $episode = '13'; $title = "Secret Santa"; $category = ''; $desc = "Michael is outraged when Jim allows Phyllis to be Santa at the office Christmas party and retaliates by dressing as Santa as well, then Jesus. David reveals to Michael that there is a buyer for Dunder Mifflin. He will most likely be fired although the Scranton staff will stay on, much to their relief. Meanwhile, Oscar has a crush on Matt, the new gay warehouse worker, and Andy and Erin continue to flirt, which starts out badly when Andy gives her \'the Twelve Days of Christmas\' when the birds from the first few attack her, but makes up for it with twelve drummers drumming.";
				MkEpp($season, $episode, $title, $category, $desc);

			$season = '6'; $episode = '14'; $title = "The Banker"; $category = ''; $desc = "When an investment banker comes to Scranton in order to sign off on the branch before the sale of Dunder Mifflin, Michael, Dwight, Andy and Pam pull out all the stops in hopes of impressing him with their high profile contacts. Toby reminisces about all the great times they have had in the office. Clip show.";
				MkEpp($season, $episode, $title, $category, $desc);

			$season = '6'; $episode = '15'; $title = "Sabre"; $category = ''; $desc = "Michael has difficulties accepting the new policies of Sabre and its CEO Jo Bennett (Kathy Bates). Michael goes to David Wallace for advice, but he finds David in a sad unemployed depression. Jim and Pam fail in their interview for a local daycare center. Both Erin and Andy wait for the other to make the next move.";
				MkEpp($season, $episode, $title, $category, $desc);

			$season = '6'; $episode = '16'; $title = "The Manager and the Salesman"; $category = ''; $desc = "The office is eager to welcome Sabre CEO Jo Bennett to Scranton, and are dazzled by her Southern ways. When Jo finds out there are two branch managers, she says either Michael or Jim must go back to being a salesman. Meanwhile, Andy\'s Valentine\'s Day plan for Erin backfires.";
				MkEpp($season, $episode, $title, $category, $desc);

			$season = '6'; $episode = '17'; $title = "The Delivery Part:1"; $category = ''; $desc = "Pam\'s contractions begin but she is determined to wait it out as long as possible so they can have more time at the hospital, unnerving Jim. Meanwhile the rest of the office tries to distract Pam from the pain with food and entertainment. Michael anxiously waits for Pam and Jim\'s baby, Cecilia, to be born. Back at the office, Erin makes Andy jealous when she has lunch with Kevin causing Andy to finally ask Erin out. Dwight and Angela draft a contract to have a baby together, but Dwight has mixed feelings after seeing Isabel at Jim and Pam\'s house when he renovates the couples kitchen.";
				MkEpp($season, $episode, $title, $category, $desc);

			$season = '6'; $episode = '18'; $title = "The Delivery Part:2"; $category = ''; $desc = "Pam\'s contractions begin but she is determined to wait it out as long as possible so they can have more time at the hospital, unnerving Jim. Meanwhile the rest of the office tries to distract Pam from the pain with food and entertainment. Michael anxiously waits for Pam and Jim\'s baby, Cecilia, to be born. Back at the office, Erin makes Andy jealous when she has lunch with Kevin causing Andy to finally ask Erin out. Dwight and Angela draft a contract to have a baby together, but Dwight has mixed feelings after seeing Isabel at Jim and Pam\'s house when he renovates the couples kitchen.";
				MkEpp($season, $episode, $title, $category, $desc);

			$season = '6'; $episode = '19'; $title = "St. Patrick\'s Date"; $category = ''; $desc = "Michael thinks he has impressed Jo, only to discover that someone else in the office has caught her eye. Dwight makes trouble for Jim on his first day back from paternity leave. Andy and Erin go on their first date, with interesting results.";
				MkEpp($season, $episode, $title, $category, $desc);

			$season = '6'; $episode = '20'; $title = "New Leads"; $category = ''; $desc = "Sabre\'s policy of \'sales is king\' goes to the sales staff\'s heads, making the rest of the office resent their bad attitude. In order to regain control, Michael hides their expensive new leads, which leads Jim on a \'treasure hunt\' all through the business park. Michael\'s plan backfires when Kevin accidentally throws some of the leads in the trash and Michael and Dwight must go to the Scranton dump to retrieve them. Andy and Erin kiss for the first time at Scranton dump while searching the leads together.";
				MkEpp($season, $episode, $title, $category, $desc);

			$season = '6'; $episode = '21'; $title = "Happy Hour"; $category = ''; $desc = "Oscar arranges a happy hour with the warehouse staff so he can flirt with Matt. Pam is excited to see the staff and brings a date for Michael, but he ends up connecting with the bar manager, Donna (Amy Pietz), instead. Meanwhile, Andy and Erin announce their relationship. Dwight rethinks his pre-natal contract with Angela to pursue Isabel.";
				MkEpp($season, $episode, $title, $category, $desc);

			$season = '6'; $episode = '22'; $title = "Secretary\'s Day"; $category = ''; $desc = "Andy tries to make Erin\'s Secretary\'s Day a memorable one. While out to lunch with Erin, Michael informs her of Andy and Angela\'s past engagement, which Andy had been hiding from Erin. Oscar circulates a video he made which compares Kevin\'s voice to Cookie Monster\'s and Kevin turns to Gabe for help when the entire office gets in on the joke.";
				MkEpp($season, $episode, $title, $category, $desc);

			$season = '6'; $episode = '23'; $title = "Body Language"; $category = ''; $desc = "Pam and Jim work on their first sales pitch together to Donna, the manager of a local restaurant, but Michael keeps misreading the signals she\'s putting out. Dwight encourages Kelly to try out for the minority training program.";
				MkEpp($season, $episode, $title, $category, $desc);

			$season = '6'; $episode = '24'; $title = "The Cover-up"; $category = ''; $desc = "Michael suspects Donna is cheating on him and puts PI Dwight Schrute on the case. Meanwhile, Andy is frustrated when no one takes his customer\'s complaint seriously.";
				MkEpp($season, $episode, $title, $category, $desc);

			$season = '6'; $episode = '25'; $title = "The Chump"; $category = ''; $desc = "Michael is surprisingly cheerful after learning some bad news about Donna. The new parents, Pam and Jim, have trouble staying awake in the office. Meanwhile, Angela takes matters into her own hands when Dwight refuses to honor their pre-natal contract.";
				MkEpp($season, $episode, $title, $category, $desc);

			$season = '6'; $episode = '26'; $title = "Whislteblower"; $category = ''; $desc = "The press learns that Sabre printers catch on fire and Jo, suspecting that someone within the company leaked the information, sets out to discover who the whistle-blower is.";
				MkEpp($season, $episode, $title, $category, $desc);
			
// SEASON SEVEN --------------------------------------------------------------

			$season = '7'; $episode = '1'; $title = "Nepotism"; $category = ''; $desc = "Michael upsets the office when he ignores their pleas to fire office assistant Luke, Michael\'s immature nephew. Pam\'s attempt to prank Dwight backfires when Kevin\'s faulty rewiring of an elevator strands the two together. Andy grows even more upset with Gabe and Erin\'s relationship.";
				MkEpp($season, $episode, $title, $category, $desc);

			$season = '7'; $episode = '2'; $title = "Counseling"; $category = ''; $desc = "Michael upsets the office when he ignores their pleas to fire office assistant Luke, Michael\'s immature nephew. Pam\'s attempt to prank Dwight backfires when Kevin\'s faulty rewiring of an elevator strands the two together. Andy grows even more upset with Gabe and Erin\'s relationship.";
				MkEpp($season, $episode, $title, $category, $desc);

			$season = '7'; $episode = '3'; $title = "Andy\'s Play"; $category = ''; $desc = "Andy lands a role in a local production of Sweeney Todd and invites the entire office to the performance, hoping to impress Erin. While Michael struggles to put his jealousy aside, Jim and Pam have trouble with their less-than-stellar babysitter.";
				MkEpp($season, $episode, $title, $category, $desc);

			$season = '7'; $episode = '4'; $title = "Sex Ed"; $category = ''; $desc = "Michael comes to work thinking he has a pimple, but it turns out to actually be a cold sore. When he is told that it is a form of herpes, Michael contacts all his ex-girlfriends—Jan (Melora Hardin), Holly (Amy Ryan), Helene (Linda Purl), Donna (Amy Pietz) and Carol (Nancy Carell). Andy holds a sex education meeting in the office hoping to appeal to Erin\'s passionate side.";
				MkEpp($season, $episode, $title, $category, $desc);

			$season = '7'; $episode = '5'; $title = "The Sting"; $category = ''; $desc = "When a Dunder Mifflin client is stolen by a rival salesman named Danny (Timothy Olyphant), Michael, Dwight and Jim decide to set up a sting in order to uncover his sales secret. Andy starts a band with Darryl when he learns that one of his old college friends has a successful music career.";
				MkEpp($season, $episode, $title, $category, $desc);

			$season = '7'; $episode = '6'; $title = "Costume Contest"; $category = ''; $desc = "Michael freaks out when Darryl goes over his head by taking an idea to corporate. The employees partake in a Halloween costume contest in the office. Meanwhile, Pam tries to get the truth from Danny about their dating history.";
				MkEpp($season, $episode, $title, $category, $desc);

			$season = '7'; $episode = '7'; $title ="Christening"; $category = ''; $desc = "Pam and Jim\'s baby, Cece, gets christened and Michael invites the entire office to celebrate. Michael joins a church group of high school graduates on a mission to Mexico, with Andy following along to impress Erin.";
				MkEpp($season, $episode, $title, $category, $desc);

			$season = '7'; $episode = '8'; $title = "Viewing Party"; $category = ''; $desc = "Erin and Gabe invite the office over to Gabe\'s house for a Glee viewing party. Michael can\'t handle the fact that the office workers think of Gabe as their boss instead of him. Growing more jealous of Gabe and Erin\'s relationship, Andy goes to extremes in order to impress her. Dwight helps Pam with Cece, much to Jim\'s chagrin.";
				MkEpp($season, $episode, $title, $category, $desc);

			$season = '7'; $episode = '9'; $title = "WUPHF.com"; $category = ''; $desc = "Michael helps Ryan by charming people to invest in his internet company, WUPHF.com. Dwight creates a hay festival in the parking lot for the Thanksgiving holiday. Jim learns of a new Sabre capping policy that prevents him from earning too much commission.";
				MkEpp($season, $episode, $title, $category, $desc);

			$season = '7'; $episode = '10'; $title = "China"; $category = ''; $desc = "When Michael reads an article about China growing as a global power, he decides they must be stopped before they take over the United States. Pam threatens to move Dunder Mifflin to a new building after everyone in the office complains about Dwight\'s building standards. Darryl is sick of Andy\'s annoying text messages.";
				MkEpp($season, $episode, $title, $category, $desc);

			$season = '7'; $episode = '11'; $title = "Classy Christmas Part:1"; $category = ''; $desc = "Michael couldn\'t be happier when Toby takes a leave of absence, leaving corporate to send Holly Flax (Amy Ryan) to cover for him. Michael forces Pam to plan a second Christmas party on the day Holly returns to Scranton. Jim agrees to a snowball fight with Dwight, which he later regrets.";
				MkEpp($season, $episode, $title, $category, $desc);

			$season = '7'; $episode = '12'; $title = "Classy Christmas Part:2"; $category = ''; $desc = "Michael couldn\'t be happier when Toby takes a leave of absence, leaving corporate to send Holly Flax (Amy Ryan) to cover for him. Michael forces Pam to plan a second Christmas party on the day Holly returns to Scranton. Jim agrees to a snowball fight with Dwight, which he later regrets.";
				MkEpp($season, $episode, $title, $category, $desc);

			$season = '7'; $episode = '13'; $title = "Ultimatum"; $category = ''; $desc = "Michael anticipates the news regarding the status of Holly and A.J.\'s relationship. In the office, Pam puts up a New Year\'s resolution board so everyone can post their resolutions. Meanwhile, Andy, Dwight and Darryl go out in hope of picking up women.";
				MkEpp($season, $episode, $title, $category, $desc);

			$season = '7'; $episode = '14'; $title = "The Seminar"; $category = ''; $desc = "Andy holds a small business seminar in the office with some special guests after he finds out that his sales are at his lowest. Michael and Holly use the seminar as an improv challenge, posing as a Greek couple. Erin and Gabe have a game of Scrabble, and Oscar and Pam help Erin out when she turns out to be a very bad Scrabble player.";
				MkEpp($season, $episode, $title, $category, $desc);

			$season = '7'; $episode = '15'; $title = "The Search"; $category = ''; $desc = "Jim gets an emergency phone call from Helene (Linda Purl), forcing him to leave Michael at a gas station bathroom. This leads Holly, Erin, and Dwight on a search for the whereabouts of Michael. A captioning contest starts in the office over Pam\'s artwork, which seems to offend Gabe.";
				MkEpp($season, $episode, $title, $category, $desc);

			$season = '7'; $episode = '16'; $title = "PDA"; $category = ''; $desc = "Jim gets an emergency phone call from Helene (Linda Purl), forcing him to leave Michael at a gas station bathroom. This leads Holly, Erin, and Dwight on a search for the whereabouts of Michael. A captioning contest starts in the office over Pam\'s artwork, which seems to offend Gabe.";
				MkEpp($season, $episode, $title, $category, $desc);

			$season = '7'; $episode = '17'; $title = "Threat Level Midnight"; $category = ''; $desc = "Michael screens his action film Threat Level Midnight to the office after eleven years of writing, shooting, re-shooting, and editing. The film features Michael as Agent Michael Scarn, Dwight as Scarn\'s sidekick, and Jim as archnemesis \'Goldenface,\' as well as several people from Michael\'s past including Jan (Melora Hardin), Karen (Rashida Jones), Roy (David Denman), Helene (Linda Purl), Todd Packer (David Koechner), Tony Gardner (Mike Bruner), and Troy Underbridge (Noel Petok).";
				MkEpp($season, $episode, $title, $category, $desc);

			$season = '7'; $episode = '18'; $title = "Todd Packer"; $category = ''; $desc = "Traveling salesman Todd Packer (David Koechner) comes to Dunder Mifflin looking for a desk job in the office. However, the office is unsure if they want him to work there due to his previous behavior. After dealing with computer problems, Andy confronts office administrator Pam to get a new computer";
				MkEpp($season, $episode, $title, $category, $desc);

			$season = '7'; $episode = '19'; $title = "Garage Sale"; $category = ''; $desc = "Michael decides to propose to Holly, and runs into trouble thinking of how to do it well with his expensive diamond ring. He consults Oscar, Ryan, Jim, and Pam for advice, and their opinions on his ideas. Meanwhile, Dunder Mifflin Scranton\'s warehouse and crew hosts a public garage sale.";
				MkEpp($season, $episode, $title, $category, $desc);

			$season = '7'; $episode = '20'; $title = "Training Day"; $category = ''; $desc = "Michael\'s replacement appears in the office, to start receiving training from Michael. The new manager, Deangelo Vickers (Will Ferrell), has everyone hoping to make good first impressions: Andy finds himself awkwardly typecast while Jim and Pam worry that they\'ve come on too strong. Only Dwight is apathetic about the new leader.";
				MkEpp($season, $episode, $title, $category, $desc);

			$season = '7'; $episode = '21'; $title = "Michaels Last Dundies"; $category = ''; $desc = "Michael trains his office replacement, Deangelo (Will Ferrell), for hosting the Dundie Awards. Meanwhile, Erin deals with her dislike of her boyfriend, Gabe.";
				MkEpp($season, $episode, $title, $category, $desc);

			$season = '7'; $episode = '22'; $title = "Goodbye Michael"; $category = ''; $desc = "Michael prepares to leave for Colorado with Holly, and spends his last day in the office saying goodbye to everyone individually, wanting no drama to ensue. Meanwhile, new manager Deangelo and Andy try to keep Michael\'s biggest clients.";
				MkEpp($season, $episode, $title, $category, $desc);

			$season = '7'; $episode = '23'; $title = "The Inner Circle"; $category = ''; $desc = "New office manager Deangelo picks favorites among the staff, revealing his true management style.";
				MkEpp($season, $episode, $title, $category, $desc);

			$season = '7'; $episode = '24'; $title = "Dwight K. Schrute, (Acting) Manager"; $category = ''; $desc = "Dwight becomes the interim regional manager, instituting a typically heavy-handed management style. Meanwhile, Gabe tries to win back Erin.";
				MkEpp($season, $episode, $title, $category, $desc);

			$season = '7'; $episode = '25'; $title = "Search Committee Part:1"; $category = ''; $desc = "Deangelo\'s new replacement is sought out through a search committee process led by Jim.";
				MkEpp($season, $episode, $title, $category, $desc);

			$season = '7'; $episode = '26'; $title = "Search Committee Part:2"; $category = ''; $desc = "Deangelo\'s new replacement is sought out through a search committee process led by Jim.";
				MkEpp($season, $episode, $title, $category, $desc);
			
// SEASON EIGHT --------------------------------------------------------------

			$season = '8'; $episode = '1'; $title = "The List"; $category = ''; $desc = "Robert California (James Spader) becomes the new regional director of Dunder Mifflin, Scranton, but becomes the new company CEO after talking to Jo Bennett. Andy Bernard (Ed Helms) is chosen by California to become the new regional manager. When Robert leaves his open notebook by reception, Erin discovers a list which divides the office employees\' names. Pam and Jim photocopy it, and the office goes crazy trying to figure out its meaning. The problem worsens when Robert invites the left-side to lunch. Eventually, California explains that the lists are of the \'winners\' and \'losers\'. After hearing this, an impassioned Andy defends his fellow coworkers.";
				MkEpp($season, $episode, $title, $category, $desc);

			$season = '8'; $episode = '2'; $title = "The Incentive"; $category = ''; $desc = "Robert challenges the Dunder Mifflin staffers to double their sales. Andy decides to create an incentive program; he promises the office that he will tattoo a picture of their choosing on his buttocks if they meet the sales quota, which they do in only one day. The office then makes Andy get a tattoo of a puppy. Pam Halpert (Jenna Fischer) becomes unlikely friends with Angela Lipton (Angela Kinsey), who is also pregnant.";
				MkEpp($season, $episode, $title, $category, $desc);

			$season = '8'; $episode = '3'; $title ="Lotto"; $category = ''; $desc = "The entire warehouse staff quits after winning the lottery, leaving Andy (Ed Helms) and Darryl Philbin (Craig Robinson) to scramble for replacements, while Jim Halpert (John Krasinski), Kevin Malone (Brian Baumgartner), Erin Hannon (Ellie Kemper) get a taste of the warehouse life. Darryl eventually confronts Andy about his jealous feelings that Andy was chosen as manager, and Andy delivers a speech that defends California\'s choice.";
				MkEpp($season, $episode, $title, $category, $desc);

			$season = '8'; $episode = '4'; $title = "Garden Party"; $category = ''; $desc = "Andy throws a garden party at Schrute Farms to impress Robert, with his parents (Stephen Collins and Dee Wallace) and brother (Josh Groban) in attendance. Andy is disappointed that even at his own party, his father shows obvious favoritism towards his brother. A conversation between Andy and his father is later broadcast via a baby monitor to the rest of the members of the office. In the meantime, Dwight Schrute (Rainn Wilson) works to make it a classy event, on the behest of a book that is an elaborate prank by Jim.";
				MkEpp($season, $episode, $title, $category, $desc);

			$season = '8'; $episode = '5'; $title = "Spooked"; $category = ''; $desc = "Erin tries to make the annual Halloween party spooky and non-childish, with help from Gabe Lewis (Zach Woods). Dwight becomes friends with Robert\'s son (David Mazouz), and Pam and Jim debate the existence of ghosts. Meanwhile, Robert tries to figure out everyone\'s deepest fears in order to culminate the party with a specially-tailored ghost story.";
				MkEpp($season, $episode, $title, $category, $desc);

			$season = '8'; $episode = '6'; $title = "Doomsday"; $category = ''; $desc = "In order to improve efficiency, Dwight installs a Doomsday device that will send an email to California and suggest the closing of the branch. After the maximum number of mistakes is made on the first day, the email is sent but the office works to counteract it; Jim is sent to distract California, whereas Pam—among others—attempts to talk Dwight into dismantling his machine. Meanwhile, Gabe attempts to court the new warehouse worker, Val (Ameenah Kaplan).";
				MkEpp($season, $episode, $title, $category, $desc);

			$season = '8'; $episode = '7'; $title = "Pam\'s Replacement"; $category = ''; $desc = "Pam trains a temporary worker, Cathy Simms (Lindsey Broad), to take her place while she is on maternity leave, and enlists Dwight\'s support when she tries to show that Jim finds her replacement attractive. Meanwhile, Robert surprises Andy, Kevin, and Darryl when he asks to join their band. However, he soon brings in several professional musicians and kicks the original three members out, forcing them to happily play outside by the dumpster";
				MkEpp($season, $episode, $title, $category, $desc);

			$season = '8'; $episode = '8'; $title = "Gettysburg"; $category = ''; $desc = "Andy takes some of the office staff on a field trip to Gettysburg for inspiration. After most of the office abandons him, Darryl and Jim confront Andy and tell him that he should stop trying so hard to impress his coworkers. Meanwhile, Gabe finds himself enjoying the trip when he is mistaken as an Abraham Lincoln impersonator. Robert tasks the remaining employees with coming up with a new business idea for Dunder Mifflin and becomes convinced that Kevin\'s simple ideas are elaborate metaphors.";
				MkEpp($season, $episode, $title, $category, $desc);

			$season = '8'; $episode = '9'; $title = "Mrs. California"; $category = ''; $desc = "Robert tries to get Andy to not give his wife, Susan (Maura Tierney), a job in the office. After a confusing interview, Andy relents and gives Susan a job, and California is furious. After Susan learns the truth, she and California have a major fight. Meanwhile, Dwight tries opens a gym in the building.";
				MkEpp($season, $episode, $title, $category, $desc);

			$season = '8'; $episode = '10'; $title = "Christmas Wishes"; $category = ''; $desc = "Andy attempts to make everyone\'s Christmas wishes come true. Erin, upset about her unrequited feelings for Andy, drinks too much at the Christmas party and is escorted home by California. Meanwhile, Dwight and Jim are ordered to stop pranking one another, lest they forfeit their Christmas bonuses. Thus, they try to frame each other.";
				MkEpp($season, $episode, $title, $category, $desc);

			$season = '8'; $episode = '11'; $title = "Trivia"; $category = ''; $desc = "When Oscar Martinez (Oscar Nunez) joins a trivia contest, Andy gets the entire office involved. Eventually, the team made up of Kevin, Erin, Kelly, and Meredith wins. Meanwhile, Dwight goes to Sabre headquarters to petition California to give him a job as a regional manager. California tries to get out of meeting with him, but eventually declines Dwight\'s request.";
				MkEpp($season, $episode, $title, $category, $desc);

			$season = '8'; $episode = '12'; $title = "Pool Party"; $category = ''; $desc = "When Robert decides to sell his mansion due to his divorce, Kevin suggests that he throw an office pool party, where Erin attempts to make Andy jealous by flirting with Dwight. Robert gives everyone a tour of his massive home, which increasingly makes everyone feel uncomfortable.";
				MkEpp($season, $episode, $title, $category, $desc);

			$season = '8'; $episode = '13'; $title = "Jury Duty"; $category = ''; $desc = "After Jim fakes having jury duty to spend time with Pam and their newborn child, Dwight suspects something is awry and tries to trip Jim up with an investigation. Jim, worrying that he will get into trouble, confides in Andy, who understands and tries to help cover up the incident. Meanwhile, Angela gives birth to her son, whom Dwight believes is his son.";
				MkEpp($season, $episode, $title, $category, $desc);

			$season = '8'; $episode = '14'; $title = "Special Project"; $category = ''; $desc = "Just as Pam\'s maternity leave ends, Dwight and Andy must select employees to accompany Dwight to Tallahassee, Florida, after he is sent on an assignment by corporate.";
				MkEpp($season, $episode, $title, $category, $desc);

			$season = '8'; $episode = '15'; $title = "Tallahassee"; $category = ''; $desc = "Dwight and his group journeys to Tallahassee to meet with the President of Sabre\'s special projects, Nellie Bertram (Catherine Tate). The group discovers that Todd Packer (David Koechner) is participating in the same project, much to Jim and Dwight\'s chagrin. Although Dwight tries to impress his new boss, he has an emergency appendectomy. Andy fills in for Erin, and surprisingly enjoys himself.";
				MkEpp($season, $episode, $title, $category, $desc);

			$season = '8'; $episode = '16'; $title = "After Hours"; $category = ''; $desc = "Dwight and Packer compete to be in charge of the Sabre store by trying to romantically woo Nellie. Cathy bothers Jim in his room and tries to seduce him, only to be foiled with help from Dwight. In Scranton, Andy has everyone stay late to cover for their co-workers in Florida.";
				MkEpp($season, $episode, $title, $category, $desc);

			$season = '8'; $episode = '17'; $title = "Test the Store"; $category = ''; $desc = "At the Sabre store opening, Dwight attempts to put on a theatrical presentation to impress Nellie. After a shaky start, an impromptu speech—originally supposed to be delivered by Ryan Howard (B.J. Novak)—given by Jim impresses the critical crowd. Andy is embarrassed after receiving a black eye, courtesy of a little girl.";
				MkEpp($season, $episode, $title, $category, $desc);

			$season = '8'; $episode = '18'; $title = "Last Dat in Flordia"; $category = ''; $desc = "When California reveals he hates Nellie\'s business plan, Jim swings into action to keep Dwight from getting fired. Jim eventually delays Dwight long enough, and Packer—who takes Dwight\'s place at the meeting with California—is fired instead of Dwight. Andy learns that Erin is not going to return to Scranton.";
				MkEpp($season, $episode, $title, $category, $desc);

			$season = '8'; $episode = '19'; $title = "Get the Girl"; $category = ''; $desc = "Andy drives to Florida to try to win back Erin. Nellie revisits the Scranton branch and takes over as regional manager, assuming that because the manager seat is vacant, she can have it. This usurping divides the office into pro-Andy and pro-Nellie factions.";
				MkEpp($season, $episode, $title, $category, $desc);

			$season = '8'; $episode = '20'; $title = "Welcome Party"; $category = ''; $desc = "California forces the office to prepare a welcome party for Nellie, but the party planners seek to sabotage it. Soon, Jim and Dwight learn tragic information about Nellie that makes them think twice about pranking her. Meanwhile, Erin helps Andy break up with his current girlfriend Jessica (Eleanor Seigler).";
				MkEpp($season, $episode, $title, $category, $desc);

			$season = '8'; $episode = '21'; $title = "Angry Andy"; $category = ''; $desc = "Andy returns to the office to find Nellie in the manager\'s chair. Andy soon overreacts by punching a hole in a wall and is promptly fired. Meanwhile, Kelly Kapoor (Mindy Kaling) is forced to choose between Ryan and a new man, Ravi (Sendhil Ramamurthy), Pam and Jim\'s pediatrician.";
				MkEpp($season, $episode, $title, $category, $desc);

			$season = '8'; $episode = '22'; $title = "Fundraiser"; $category = ''; $desc = "Andy goes to a fundraiser held by Angela\'s husband Robert Lipton (Jack Coleman) and returns with 12 dogs. Dwight, who wants to win the entire auction, discovers that the winners must lose money. Nellie tries to bond with Darryl and he teaches her how to properly eat a taco.";
				MkEpp($season, $episode, $title, $category, $desc);

			$season = '8'; $episode = '23'; $title = "Turf War"; $category = ''; $desc = "While drunk, Robert shuts down Dunder Mifflin\'s Binghamton branch. Andy prepares to make his comeback by temporarily forming his own rival paper company. Jim and Dwight work together to defeat a rival salesman (Chris Bauer) who wants the Binghamton branch\'s clients";
				MkEpp($season, $episode, $title, $category, $desc);

			$season = '8'; $episode = '24'; $title = "Free Family Portrait Studio"; $category = ''; $desc = "Dwight offers free family portraits in an elaborate scheme to obtain the DNA of Angela\'s child. After he steals a diaper, Angela pursues him in a high-speed car chase. After former CFO of Dunder Mifflin David Wallace (Andy Buckley) buys back the company, he re-installs Andy as manager and donates several million dollars to a mentor program California will join. California promptly leaves the office for good.";
				MkEpp($season, $episode, $title, $category, $desc);
			
	
// SEASON NINE --------------------------------------------------------------	
		
			if($episode == 1)
			$season = '9'; $episode = '1'; $title = "New Guys"; $category = ''; $desc = "Two new employees, Clark (Clark Duke) and Pete (Jake Lacy), are hired by the Scranton branch and cause trouble for Jim Halpert (John Krasinski) and Dwight Schrute (Rainn Wilson). Andy Bernard (Ed Helms) returns from manager training, hoping for revenge on Nellie Bertram (Catherine Tate). Oscar Martinez (Oscar Nunez) considers adopting Angela Martin\'s (Angela Kinsey) cat. Kevin Malone (Brian Baumgartner) \'saves\' a turtle. Kelly Kapoor (Mindy Kaling) leaves for Ohio, and Ryan Howard (B.J. Novak) follows after her.";
				MkEpp($season, $episode, $title, $category, $desc);

			$season = '9'; $episode = '2'; $title = "Roys Wedding"; $category = ''; $desc = "Jim and Pam Halpert (Jenna Fischer) are invited to Pam\'s former fiancé Roy Anderson\'s (David Denman) wedding. A toast that Roy gives leads Pam and Jim to search their relationships for buried secrets. Meanwhile, Dwight reacts to Nellie\'s mandatory charity initiative by maintaining that he will donate the money he raises to the Taliban, and Clark hits on Erin Hannon (Ellie Kemper) by dangling a fake newscaster job, but Andy takes the bait.";
				MkEpp($season, $episode, $title, $category, $desc);

			$season = '9'; $episode = '3'; $title = "Andy\'s Ancestry"; $category = ''; $desc = "Andy brags about his discovery that he is related to First Lady Michelle Obama. Darryl Philbin (Craig Robinson) finds his new job as Assistant Regional Manager difficult. Dwight attempts to teach Erin the Dothraki language from the HBO television series Game of Thrones so that she can impress Andy\'s educated family. Nellie and Pam bond, and Nellie tells Pam that Jim may be having an affair. Meanwhile, Jim reveals his plans of moving to Philadelphia to Darryl in the warehouse.";
				MkEpp($season, $episode, $title, $category, $desc);

			$season = '9'; $episode = '4'; $title = "Work Bus"; $category = ''; $desc = "When Jim convinces Dwight that the building is unsafe due to a radiation leak, Dwight rents a bus and sets up the office inside. Meanwhile, Nellie asks Andy for a letter of recommendation in order to adopt a baby; Erin, meanwhile, gives her pointers on how to fill out a proper application for adoption. Jim tries to make Pam happy with some pie.";
				MkEpp($season, $episode, $title, $category, $desc);

			$season = '9'; $episode = '5'; $title = "Here Comes Treble"; $category = ''; $desc = "After inviting his former college a cappella group, Here Comes Treble, to perform for the office during Halloween, Andy gets angry when he hears that his college friend Broccoli Rob (Stephen Colbert) is telling a different story about the group. Dwight tries to track down a madman in the office; Jim and Pam fight over his new job.";
				MkEpp($season, $episode, $title, $category, $desc);

			$season = '9'; $episode = '6'; $title = "The Boat"; $category = ''; $desc = "Andy must help his family when his dad loses all of their money. Meanwhile, Dwight is a guest on a radio show, and his co-workers call in to bother him. Kevin learns a secret about Oscar. This episode features the return of Andy\'s brother Walter Jr. (Josh Groban), who is now a drunk.";
				MkEpp($season, $episode, $title, $category, $desc);

			$season = '9'; $episode = '7'; $title = "The Whale"; $category =''; $desc = "Dwight is tasked with selling paper to an unknown woman—revealed to be Jan Levinson (Melora Hardin)—from the Scranton White Pages and Pam and the women of the office teach him how to interact with women. Angela fears that her husband, Robert (Jack Coleman), is cheating on her and enlists Oscar to help her spy on him at his yoga class. Meanwhile, Andy skypes into the office from his boat and Toby (Paul Lieberstein) convinces several of the men in the office to grow mustaches for \'Movember\'.";
				MkEpp($season, $episode, $title, $category, $desc);

			$season = '9'; $episode = '8'; $title = "The Target"; $category = ''; $desc = "Angela goes to Dwight for help when she learns that her husband is having an affair with Oscar. Stanley Hudson (Leslie David Baker) and Phyllis Vance (Phyllis Smith) take advantage of Jim when he needs a favor, and Pete distracts Pam as she begins painting her mural.";
				MkEpp($season, $episode, $title, $category, $desc);

			$season = '9'; $episode = '9'; $title = "Dwight Christmas"; $category = ''; $desc = "When the party planning committee forgets to plan the annual Christmas party, Dwight gets everyone to celebrate with a traditional Schrute German Christmas. Darryl fears that Jim has forgotten to include him in the new job in Philadelphia. Pete teaches Erin about his favorite movie Die Hard. Toby discusses the Scranton Strangler trial with Nellie.";
				MkEpp($season, $episode, $title, $category, $desc);

			$season = '9'; $episode = '10'; $title = "Lice"; $category = ''; $desc = "Pam accidentally brings lice into the office but lets Meredith Palmer (Kate Flannery) take the fall while Dwight vows to destroy the parasites; Jim spends a great day in Philadelphia with a potential business associate (Julius Erving); Nellie, Phyllis, and Kevin interfere with Darryl\'s love life.";
				MkEpp($season, $episode, $title, $category, $desc);

			$season = '9'; $episode = '11'; $title = "Suit Warehouse"; $category = ''; $desc = "Clark returns from his stint as Jan\'s sexual assistant and Dwight enlists his help; the two pose as a father and son so that they can successfully sell to the owner of a suit warehouse. Darryl travels to Philadelphia with Pam to interview at Jim\'s new company; after a mixed interview, Darryl gets the job. Meanwhile, Pam starts to realize that her family may have to leave Scranton.";
				MkEpp($season, $episode, $title, $category, $desc);

			$season = '9'; $episode = '12'; $title = "Customer Loyalty"; $category = ''; $desc = "Jim is forced to miss Cece\'s first recital after a major investor exits his company. Dwight tries to prevent Darryl from leaving the office. Nellie accidentally outs Pete and Erin. Jim is upset with Pam because of her faillure to record Cece\'s recital, but the argument quickly escalates into a major fight about Jim\'s business venture. Boom mic operator Brian (Chris Diamantopoulos) enters the shot to comfort a distressed Pam.";
				MkEpp($season, $episode, $title, $category, $desc);

			$season = '9'; $episode = '13'; $title = "Junior Salesman"; $category = ''; $desc = "Dunder Mifflin CEO David Wallace (Andy Buckley) tasks Dwight with finding a part-time replacement for Jim; Dwight in turns enlists several of his close friends, including his cousin Mose (Michael Schur). Pam tries to find out who her new desk mate will be.";
				MkEpp($season, $episode, $title, $category, $desc);

			$season = '9'; $episode = '14'; $title = "Vandalism"; $category = ''; $desc = "Someone vandalizes Pam\'s warehouse mural. Distraught, she seeks the help of Dwight and Nellie, who both eagerly help her track down the vandal. Meanwhile, in their Philadelphia apartment, Darryl is uncomfortable with Jim\'s uncleanliness. Angela begrudgingly allows Oscar and Kevin to attend her son Phillip\'s first birthday party.";
				MkEpp($season, $episode, $title, $category, $desc);

			$season = '9'; $episode = '15'; $title = "Couples Discount"; $category = ''; $desc = "The office pairs into couples so that they may all be able to take advantage of a Valentine\'s Day discount at a mini-mall. After Andy returns from his boat trip, Erin decides that she is going to break up with him so that she can be with Pete, but Pete begins to doubt her. Pam and Jim share lunch with Brian, the documentary\'s sound man.";
				MkEpp($season, $episode, $title, $category, $desc);

			$season = '9'; $episode = '16'; $title = "Moving On"; $category = ''; $desc = "Pam interviews for a job in Philadelphia, but her potential manager (Bob Odenkirk) reminds her of her former boss, Michael Scott. Dwight acquires the help of Angela in order to give his elderly Aunt Shirley (Mary Gillis) a bath. Meanwhile, Andy attempts to make Pete and Erin feel uncomfortable.";
				MkEpp($season, $episode, $title, $category, $desc);

			$season = '9'; $episode = '17'; $title = "The Farm"; $category = ''; $desc = "Oscar attends the funeral of Dwight\'s Aunt Shirley at Schrute Farms. Dwight\'s sister Fannie (Majandra Delfino) and brother Jeb (Thomas Middleditch) also attend and Shirley stipulates in her will that they are set to inherit her farm only if they choose to live and work it themselves. Todd Packer (David Koechner) returns to the office to make amends as part of an alcoholic and narcotics recovery process but instead hands out cupcakes laced with laxatives and drugs.";
				MkEpp($season, $episode, $title, $category, $desc);

			$season = '9'; $episode = '18'; $title = "Promos"; $category = ''; $desc = "Everyone in the office is excited when international promos for the documentary surface, but are soon horrified to discover how much candid filming has taken place. While everyone panics about their secrets being revealed, Pam reflects upon how much she and Jim have changed over the past nine years. Dwight makes Angela jealous when he starts dating a Brussels sprout farmer, who Clark suspects may be trying to lure Dwight into a scam. Andy battles rude comments on the Internet. Meanwhile, Jim and Darryl have a big meeting with Major League baseball player, Ryan Howard, who pitches a bizarre sci-fi sports movie about himself.";
				MkEpp($season, $episode, $title, $category, $desc);

			$season = '9'; $episode = '19'; $title = "Stairmageddon"; $category = ''; $desc = "The elevators are under maintenance and the office workers have to walk up the stairs, a situation everyone deems the \'Stairmageddon\'. Exhausted after climbing the stairs, Stanley refuses to go back down in order to close a sale with one of their bigger clients. Dwight is forced to shoot Stanley with a few bull tranquillizer darts to knock him out. Dwight and Clark then take a drugged Stanley on the sales call. Pam and Jim spend time talking with Nellie and Toby respectively about their marital troubles and couples counselling. Angela attends a press conference with the senator who outs himself as gay on television, and shocking both her and Oscar, reveals his relationship to his press secretary. Andy meets with talent agent Carla Fern (Roseanne Barr).";
				MkEpp($season, $episode, $title, $category, $desc);

			$season = '9'; $episode = '20'; $title = "Paper Airplane"; $category = ''; $desc = "Dwight and Angela participate in a paper airplane contest and compete against each other. Meanwhile, Andy prepares for a potential acting job, and Jim and Pam utilize new skills that they learned in couples counseling. Roseanne Barr guest stars in this episode as well.";
				MkEpp($season, $episode, $title, $category, $desc);

			$season = '9'; $episode = '21'; $title = "Livin\' the Dream"; $category = ''; $desc = "Andy decides to pursue a career as a professional actor, and quits his job at Dunder Mifflin. Meanwhile, Dwight finally receives his black belt in karate from his new sensei (Michael Imperioli) and, on the behest of Jim, is promoted to Regional Manager of the Scranton branch. Jim, who reconnects with Pam, is promoted by Dwight to be the new Assistant to the Regional Manager and makes it clear that he will choose her over Philadelphia.";
				MkEpp($season, $episode, $title, $category, $desc);

			$season = '9'; $episode = '22'; $title = "A.A.R.M."; $category = ''; $desc = "Jim convinces Dwight that he needs to choose someone to act as an Assistant to the Assistant to the Regional Manager; the two subsequently hold tryouts for the position. After her daycare turns away her child, Angela is forced to bring her kid to work. Andy auditions for \'The Next Great A Cappella Sensation\'. This episode guest stars Aaron Rodgers, Clay Aiken, Mark McGrath, Santigold, and Jessica St. Clair.";
				MkEpp($season, $episode, $title, $category, $desc);

			$season = '9'; $episode = '23'; $title = "Finale"; $category = ''; $desc = "One year after the airing of the documentary, past and present employees of Dunder Mifflin gather for Dwight and Angela\'s wedding. Dwight initially chooses Jim to be his best man, but Michael Scott (Steve Carell) shows up and takes his place. Finally, everyone comes together for a final round of interviews. The episode guest stars Mindy Kaling, B. J. Novak, Rachael Harris, Dakota Johnson, Joan Cusack, Sendhil Ramamurthy, Ed Begley, Jr., Malcolm Barrett, Matt L. Jones, Bill Hader, Seth Meyers, and Nancy Carell.";
				MkEpp($season, $episode, $title, $category, $desc);
			

	
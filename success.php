<?php
session_start();

	include("connection.php");
	include("function.php");

	$user_data = check_login($con);

?>
<!DOCTYPE html>
<html>
<title>Main</title>
<link rel="stylesheet" href="succ.css">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
 <meta charset="utf-8">
</head>
<body>

		<div class="menu">
	<a href="Logout.php" style="float:right"> Logout </a>

</div>



<div class="tab">
  <button class="tablinks" onmouseover="openCity(event, 'Authorization')">Authorization Letter</button>
  <button class="tablinks" onmouseover="openCity(event, 'Business')">Business Letter</button>
		<button class="tablinks" onmouseover="openCity(event, 'Certificate')">Certificate Letter</button>
  <button class="tablinks" onmouseover="openCity(event, 'cover')">Cover Letter</button>
  <button class="tablinks" onmouseover="openCity(event, 'Essay')">Essay</button>
  <button class="tablinks" onmouseover="openCity(event, 'Research')">Research paper</button>
  <button class="tablinks" onmouseover="openCity(event, 'Resume')">Resume</button>
  <button class="tablinks" onmouseover="openCity(event, 'Speech')">Public Speech</button>
</div>

<div id="Authorization" class="tabcontent">
  <h3>What is authorization Letter?</h3>
  <pre style="font-size:15px">
An authorization letter gives an individual a fair idea about the process to provide documents. It can act
as a proof for providing any relevant details to a person in charge. Besides, the authorization letter is also
necessary and act as a tool to give critical insights about a company or a firm to another person. Like
other letters, authorization letter follows the same procedure and format for drafting a letter.
<li>Name: Include the receiver’s name.
• Address: Include the receiver’s address
• Location: Include receiver’s location (Optional)
• Contact No: Include sender’s contact number (Optional)
• Salutation: You can start your letter with ‘dear’ ‘Mr/Mrs’.
• Body: State what is being authorized and who are you granting the authorization to. Provide
detail to reassure the reader that it was you who wrote the letter. Specify data and numbers for a
clearer picture.
• Thank you note- Thank the reader for acknowledging your request
• Complimentary Closing- Add formal closing only in authorization letters.
• Name- Include your full name.
• Date- Add the present date of sending a letter. This section is optional.</li></pre>

<pre style="font-size:15px">
	<b>Samples of Authorization Letter</b>
To;
Xyz Office
Hudson Lane
Delhi
Subject: Authority letter to collect documents
Dear Sir/Madam
I (Your Name), writing to authorize (name of the person to be authorized) to (action to be
performed) during my absence. You can also find the identical copy of (name of document)
enclosed with the letter, to identify the person, when he/she comes to collect the certificates.
Kindly provide her certificates with an additional copy.
I appreciate your consideration for the same. The letter is valid until I provide notice otherwise.
You can reach out to me for any additional clarification.
</pre>
</div>

<div id="Business" class="tabcontent">
  <h3>What is business Letter?</h3>
  <pre style="font-size:15px" >
A business plan can make or break a small business. A strong, detailed plan provides a clear road map for the future,
forces you to think through the validity of a business idea, and can give you much greater understanding of your business’s
financials and the competition.A business plan typically looks out over three to five years, detailing all of your goals and
how you plan to achieve them. If you're applying for a loan or looking for investors, a business plan shows you’re prepared
and have fully vetted your business idea, says Craig Allen, a financial advisor who teaches business plan writing classes at
Southern New Hampshire University. “If you have no financial forecast, which is part of the business plan, it’s very difficult
to show the bank how you are going to repay the loan,” Allen says.

<b>1. Executive summary</b>
This is the first page of your business plan. It should include a mission statement, which explains the main focus of your business,
as well as a brief description of the products or services offered, basic information such as ownership structure, and a summary of your plans.

<b>2. Company description</b>
This section provides a snapshot of your small business. It contains important information including its registered name, address of
any physical locations, names of key people in the business, history of the company, nature of the business and more details about products or
services that it offers or will offer.

<b>3. Objective statement or business goals</b>
An objective statement should clearly define your company’s goals and contain a business strategy that details how you plan to achieve them.
It spells out exactly what you’d like to accomplish, both in the near term and over the long term.
If you’re looking for outside funding, you can use this section to explain why you have a clear need for the funds, how the financing will
help your business grow, and how you plan to achieve your growth targets. The key is to provide a clear explanation of the opportunity
 presented and how the loan or investment will grow your company.
For example, if your business is launching a second product line, you might explain how the loan will help your company launch the
 new product and increase its sales by 50% over the next three years.

<b>4. Business and management structure</b>
Here, you’ll list your business’s legal structure — such as a sole proprietorship, partnership or corporation — as well as
key employees, managers or other owners of the business. It should
also include the percent ownership that each owner has and the extent of each owner’s
involvement in the company.
5. Products and services
In this section, you can detail the products or services you offer or plan to offer. It should
include the following:
• An explanation of how your product or service works
• The pricing model for your product or service
• The typical customers you serve
• Your sales and distribution strategy
• Why your product or service is better than what the competition is offering
• How you plan to fill orders
You can also discuss current or pending trademarks and patents associated with your
product or service.

<b>6. Marketing and sales plan</b>
This is simply an explanation of what your marketing strategy is and how you will
execute it. Here, you can address how you plan to persuade customers to buy your
products or services, or how you will develop customer loyalty that will lead to repeat
business. This section can also highlight the strengths of your business and focus on
what sets your business apart from your competition.

<b>7. Business financial analysis</b>
If you’re a startup, you may not have much information on your business financials yet.
However, if you’re an existing business seeking small-business loans, you’ll want to
include income or profit-and-loss statements, a balance sheet that lists your assets and
debts, and a cash flow statement that shows how cash comes into and goes out of the
company.
You may also include ratios that highlight the financial health of your business, such as:
• Net profit margin: the percentage of revenue you keep as net income
• Current ratio: the measurement of your liquidity and ability to repay debts
• Accounts receivable turnover ratio: a measurement of how frequently you collect
on receivables per year

<b>8. Financial projections</b>
This is a critical part of your business plan if you’re seeking financing or investors. It
outlines how your business will generate enough profit to repay the loan or how you will
earn a decent return for investors.
Here, you’ll provide your business’s monthly or quarterly sales, expenses and profit
estimates over at least a three-year period — with the future numbers assuming you’ve
obtained a new loan. Accuracy is key, so carefully analyze your past financial statements
before giving projections.
Your goals may be aggressive, but they should also be realistic. “It’s OK to be optimistic if
you can justify it,” Allen says. “In general, you don’t want to stand out in a negative way
by being too optimistic.”
You want to show that your business can generate strong enough cash flow to cover the
regular debt payments on a loan. But you should also address the various risk factors of
the business, Allen says.
“The loan officer is definitely going to want to know that you’ve thought through all of
the potential risks and that you’ve mitigated those risks in some way,” he says.

<b>9. Appendix</b>
List any supporting information or other additional information that you couldn’t fit in
elsewhere, such as resumes of key employees, licenses, equipment leases, permits,
patents, receipts, bank statements, contracts, and personal and business credit history. If
the appendix is long, you may want to consider adding a table of contents at the
beginning of this section.
Business plan tips and resources
Now that you’ve written your business plan, here are some tips to help your hard work
stand out:
Avoid over-optimism: If you’re applying for a business loan at a local bank, the loan
officer likely knows your market pretty well. Providing unreasonable sales estimates can
hurt your chances of loan approval.
“They know what you can expect sales to be for that type of business in that market,”
Allen says. “If you walk in with a sales forecast 50% higher than other businesses, they
are going to know that you are not being realistic, and that’s going to work against you.”
Keep it concise: All you need is 15 to 25 pages for a good business plan, as long as the
plan is clear, concise and contains all of the relevant information, Allen says.
Focus on the key elements of your business plan and avoid getting too bogged down by
the technical aspects of your business or using too much industry jargon. You can always
put supporting information or other important details in the appendix.
Proofread: Spelling, punctuation and grammatical errors can jump off the page and turn
off lenders and prospective investors, taking their mind off your business and putting it
on the mistakes you made. If writing and editing aren't your strong suit, you may want to
hire a professional business plan writer, copy editor or proofreader.
“I always feel like if the person can’t even bother to proofread something that they
wrote, how detail-oriented is this person in running their business?” Allen says.
Use free resources: SCORE is a nonprofit association that offers a large network of
volunteer business mentors and experts who can help you write or edit your business
plan. You can search for a mentor or find a local SCORE chapter for more guidance.</pre>
</div>

<div id="cover" class="tabcontent">
  <h3>What is Cover Letter</h3>
  <pre style="font-size:15px">
<b>Pick your purpose</b>
Of course your goal is to get the job, but there are several kinds of cover letters that
can help you achieve that goal — and knowing the kind you want to write will help you get yours right.
“They all have a purpose,” says Brenda Collard-Mills, owner of Robust Resumes and Resources.
 “There is the traditional cover letter to reply to an advertised job, a networking cover letter,
 a cover letter targeted to recruiters, the direct mail cover letter and the pain cover letter,”
 which addresses a specific pain point the company may have and how you would be able to solve it.
“Research when to use each type and incorporate as many as possible when conducting an active job search.”
<b>Reflect the company’s culture</b>
Go beyond using keywords from the ad and find a way to make your cover letter reflect what the company is all about.
“For example, if applying to a data analysis, statistically focused company, your cover letter should be equally
quantified and appealing to data-thirsty readers,” says Erik Bowitz, of the nonprofit organization Copy My Resume.
“If you are applying for a position in a young, creative company then your cover letter should be more casual and
fluid, using words like active, social or even organic to better reflect the ideals of the individuals you are hoping
to work with.”
<b>Focus on the organization’s needs</b>
You want a job, but you need to focus on what the employer wants if you hope to succeed, says Lynne Sarikas,
director of the MBA Career Center at the D’Amore McKim School of Business. “Be very specific in addressing their
needs outlined in the job description and show them how you can address their specific needs.”
Presenting yourself as a solution to a hiring manager’s problem can help your cover letter take the right tone.
Donna Shannon, president of Personal Touch Career Services and author of “How to Get a Job Without Going Crazy,”
recommends providing specific examples of how you can help the company. “A salesperson can discuss how they will
increase the revenue of the company. An executive assistant can speak about the problems they solve on a daily basis.
The IT professional can write about how they can improve the efficiency and effectiveness of the systems, thereby saving
the company money. Always think: how can I help this company?”
<b>Sublimate your ego</b>
As you focus on the company’s needs, use the word “I” sparingly, says Sarikas.
“The cover is letter is about meeting their needs, so be very careful not to overuse ‘I.’ Do not start every
paragraph or multiple sentences with ‘I.’ Think about different ways to get your message across.”
	</pre>
</div>

<div id="Essay" class="tabcontent">
  <h3>Essay</h3>
  <pre style="font-size:15px">
How to Write an Essay
<b>Writing the introduction</b>
The introduction sets the tone for your essay. It should grab the reader’s interest and inform them of what to expect.
The introduction generally comprises 10–20% of the text.
<b>1. Hook your reader</b>
The first sentence of the introduction should pique your reader’s interest and curiosity. This sentence is sometimes called the hook.
It might be an intriguing question, a surprising fact, or a bold statement emphasizing the relevance of the topic.
Let’s say we’re writing an essay about the development of Braille (the raised-dot reading and writing system used
by visually impaired people). Our hook can make a strong statement that about the topic:
The invention of Braille was a major turning point in the history of disability.
<b>2. Provide background on your topic</b>
Next, it’s important to give context that will help your reader understand your argument. This might involve
providing background information, giving an overview of important academic work or debates on the topic, and
explaining difficult terms. Don’t provide too much detail in the introduction—you can elaborate in the body of your essay.
<b>3. Present the thesis statement</b>
Next, you should formulate your thesis statement—the central argument you’re going to make. The thesis statement
provides focus and signals your position on the topic. It is usually one or two sentences long. The thesis statement
for our essay on Braille could look like this:
As the first writing system designed for blind people’s needs, Braille was a groundbreaking new accessibility tool.
It not only provided practical benefits, but also helped change the cultural status of blindness.
<b>4. Map the structure</b>
In longer essays, you can end the introduction by briefly describing what will be covered in each part of the essay.
This guides the reader through your structure and gives a preview of how your argument will develop.

<h3>Example of an introduction</h4>
The invention of Braille marked a major turning point in the history of disability. The writing system of raised dots
used by blind and visually impaired people was developed by Louis Braille in nineteenth-century France. In a society that
did not value disabled people in general, blindness was particularly stigmatized, and lack of access to reading and writing
was a significant barrier to social participation. The idea of tactile reading was not entirely new, but existing methods
based on sighted systems were difficult to learn and use. As the first writing system designed for blind people’s needs,
Braille was a groundbreaking new accessibility tool. It not only provided practical benefits, but also helped change the
cultural status of blindness. This essay begins by discussing the situation of blind people in nineteenth-century Europe.
It then describes the invention of Braille and the gradual process of its acceptance within blind education. Subsequently,
it explores the wide-ranging effects of this invention on blind people’s social and cultural lives.

<b>Writing the main body</b>

The body of your essay is where you make arguments supporting your thesis, provide evidence, and develop your ideas.
Its purpose is to present, interpret, and analyze the information and sources you have gathered to support your argument.

<b>Length of the body text</b>

The length of the body depends on the type of essay. On average, the body comprises 60–80% of your essay.
For a high school essay, this could be just three paragraphs, but for a graduate school essay of 6,000 words, the
body could take up 8–10 pages.

<b>Paragraph structure</b>

To give your essay a clear structure, it is important to organize it into paragraphs. Each paragraph should be centered
around one main point or idea.That idea is introduced in a topic sentence. The topic sentence should generally lead on
from the previous paragraph and introduce the point to be made in this paragraph. Transition words can be used to create
clear connections between sentences.After the topic sentence, present evidence such as data, examples, or quotes from
relevant sources. Be sure to interpret and explain the evidence, and show how it helps develop your overall argument.

<b>Example of a paragraph from an essay</b>

Lack of access to reading and writing put blind people at a serious disadvantage in nineteenth-century society. Text was one
of the primary methods through which people engaged with culture, communicated with others, and accessed information; without
a well-developed reading system that did not rely on sight, blind people were excluded from social participation (Weygand, 2009).
While disabled people in general suffered from discrimination, blindness was widely viewed as the worst disability, and it was
commonly believed that blind people were incapable of pursuing a profession or improving
themselves through culture (Weygand, 2009). This demonstrates the importance of reading and writing to social status at
the time: without access to text, it was considered impossible to fully participate in society. Blind people were excluded
from the sighted world, but also entirely dependent on sighted people for information and education.

<b>Writing the conclusion</b>

The conclusion is the final paragraph of an essay. It should generally take up no more than 10–15% of the text.
A strong essay conclusion:
• Returns to your thesis
• Ties together your main points
• Shows why your argument matters
A great conclusion should finish with a memorable or impactful sentence that leaves the reader with a strong final impression.
What not to include in a conclusion
To make your essay’s conclusion as strong as possible, there are a few things you should avoid. The most common mistakes are:
• Including new arguments or evidence
• Undermining your arguments (e.g. “This is just one approach of many”)
• Using concluding phrases like “To sum up…” or “In conclusion…”

	</pre>
</div>

<div id="Research" class="tabcontent">
  <h3>Research Paper</h3>
  <pre style="font-size:15px">
<b>• Introductory Paragraph</b>
Do not keep the reader waiting to learn the precise subject of the dissertation. State the general
field of interest in one or two paragraphs, and end with a sentence that states what study will accomplish.
<b>• Background of the Problem</b>
This section is critically important as it must contain some mention of all the subject matter in
the following Chapter 2 Review of the Literature 2 and the methodology in Chapter 3. Key words
should abound that will subsequently be used again in Chapter 2. The section is a brief two to
four page summary of the major findings in the field of interest that cites the most current
finding in the subject area. A minimum of two to three citations to the literature per paragraph
is advisable. The paragraphs must be a summary of unresolved issues, conflicting findings, social
concerns, or educational, national, or international issues, and lead to the next section, the
statement of the problem. The problem is the gap in the knowledge. The focus of the
Background of the Problem is where a gap in the knowledge is found in the current body of
empirical (research) literature.
<b>• Statement of the Problem</b>
Arising from the background statement is this statement of the exact gap in the knowledge
discussed in previous paragraphs that reviewed the most current literature found. A gap in the
knowledge is the entire reason for the study, so state it specifically and exactly. Use the words
“gap in the knowledge.” The problem statement will contain a definition of the general need for
the study, and the specific problem that will be addressed.
<b>• Purpose of the Study</b>
The Purpose of the Study is a statement contained within one or two paragraphs that identifies
the research design, such as qualitative, quantitative, mixed methods, ethnographic, or another
design. The research variables, if a quantitative study, are identified, for instance, independent,
dependent, comparisons, relationships, or other variables. The population that will be used is
identified, whether it will be randomly or purposively chosen, and the location of the study is
summarized. Most of these factors will be discussed in detail in Chapter 3.
<b>• Significance of the Study</b>
The significance is a statement of why it is important to determine the answer to the
gap in the knowledge, and is related to improving the human condition. The
contribution to the body of knowledge is described, and summarizes who will be able to
use the knowledge to make better decisions, improve policy, advance science, or other
uses of the new information. The “new” data is the information used to fill the gap in theknowledge.
<b>• Primary Research Questions</b>
The primary research question is the basis for data collection and arises from the Purpose of the
Study. There may be one, or there may be several. When the research is finished, the
contribution to the knowledge will be the answer to these questions. Do not confuse the
primary research questions with interview questions in a qualitative study, or survey questions in
a quantitative study. The research questions in a qualitative study are followed by both a null
and an alternate hypothesis.
<b>• Hypotheses</b>
A hypothesis is a testable prediction for an observed phenomenon, namely, the gap in
the knowledge. Each research question will have both a null and an alternative
hypothesis in a quantitative study. Qualitative studies do not have hypotheses. The two
hypotheses should follow the research question upon which they are based. Hypotheses
are testable predictions to the gap in the knowledge. In a qualitative study the
hypotheses are replaced with the primary research questions.
<b>• Research Design</b>
In Chapter 1 this is a summary of the methodology and contains a brief outline of three
things: (a) the participants in a qualitative study or the subjects of a quantitative study
(human participants are referred to as participants, non-human subjects are referred to
as subjects), (b) the instrumentation used to collect data, and (c) the procedure that will
be followed. All of these elements will be reported in detail in Chapter 3. In a
quantitative study, the instrumentation will be validated in Chapter 3 in detail. In a
qualitative study, if it is a researcher-created questionnaire, validating the correctness of
the interview protocol is usually accomplished with a pilot study. For either a
quantitative or a qualitative study, using an already validated survey instrument is easier
to defend and does not require a pilot study; however, Chapter 3 must contain a careful
review of the instrument and how it was validated by the creator.
In a qualitative study, which usually involves interviews, the instrumentation is an
interview protocol – a pre-determined set of questions that every participant is asked
that are based on the primary research questions. A qualitative interview should contain
no less than 10 open-ended questions and take no less than 1 hour to administer to qualify as “robust”
research.In the humanities, a demographic survey should be circulated with most quantitative
and qualitative studies to establish the parameters of the participant pool. Demographic
surveys are nearly identical in most dissertations. In the sciences, a demographic survey is rarely needed.
<b>• Theoretical Framework</b>
The theoretical framework is the foundational theory that is used to provide a perspective upon which
the study is based. There are hundreds of theories in the literature. For instance, if a study in the
social sciences is about stress that may be causing teachers to quit, Apple’s Intensification Theory
could be cited as the theory was that stress is cumulative and the result of continuing overlapping,
progressively stringent responsibilities for teachers that eventually leads to the desire to quit. In the
sciences, research about new species that may have evolved from older, extinct species
would be based on the theory of evolution pioneered by Darwin. Some departments put the theoretical
framework explanation in Chapter 1; some put it in Chapter 2.
<b>• Assumptions, Limitations, and Scope (Delimitations) Assumptions are self-evident truths.</b>
In a qualitative study, it may be assumed that participants be highly qualified in the study is about administrators.
It can be assumed that participants will answer truthfully and accurately to the interview questions based on their
personal experience, and that participants will respond honestly and to the best
of their individual abilities.Limitations of a study are those things over which the research has no control.
Evident limitations are potential weaknesses of a study. Researcher biases and perceptual misrepresentations are
potential limitations in a qualitative study; in a quantitative study,a limitation may be the capability of
an instrument to accurately record data. Scope is the extent of the study and contains measurements.
In a qualitative study this would include the number of participants, the geographical location, and other
pertinent numerical data. In a quantitative study the size of the elements of the
experiment are cited. The generalizability of the study may be cited. The word generalizability,
which is not in the Word 2007 dictionary, means the extent to which the data are applicable in places other
than where the study took place, or under what conditions the study took place.
Delimitations are limitations on the research design imposed deliberately by the researcher.
Delimitations in a social sciences study would be such things as the specific school district where a study
took place, or in a scientific study, the number of repetitions.
<b>• Definition of Terms</b>
The definition of terms is written for knowledgeable peers, not people from other
disciplines As such, it is not the place to fill pages with definitions that knowledgeable
peers would know at a glance. Instead, define terms that may have more than one meaning among knowledgeable peers.
<b>• Summary</b>
Summarize the content of Chapter 1 and preview of content of Chapter 2.
</pre>
</div>

<div id="Resume" class="tabcontent">
  <h3>What is an resume</h3>
  <pre style="font-size:15px">
No two resumes will look exactly alike (nor should they!), but generally, resumes should have the following sections.
<b>Header & Contact Info:</b> At the top of your resume, always include a header containing your name. Your contact info
(typically your phone number, personal email address and sometimes links to social profiles or personal websites)
should be close by as well. After all, you don’t want there to be any confusion over who the resume belongs to, or make
it difficult for recruiters or hiring managers to reach out to you. However, you may want to avoid putting your contact
info in the header or footer of the document itself — the headers and footers can sometimes be overlooked by the software that
scans your resume.

<b>Professional Summary: </b>The professional summary is a brief, one- to three-sentence section featured prominently
on your resume that succinctly describes who you are, what you do and why you’re perfect for the job. In contrast with
the largely out-of-date objective statement — a line that describes the type of career opportunity you’re looking for
— professional summaries aren’t about what you want. Instead, they’re focused on the value you could bring to a potential employer.
It’s worth noting that a professional summary isn’t an absolute must-have — if your resume is missing one,
it probably won’t be a dealbreaker — but it can be a nice way to give time-pressed recruiters and hiring managers a quick,
high-level overview of why you’re the right person for the job.

<b>Skills:</b> Once relegated to the bottom of resumes as an afterthought, the skills section has become more and more
important as recruiters and hiring managers increasingly look for candidates with specialized backgrounds. Rather than
 making the folks reading your resume hunt through your bullet points to find your skills, it’s best to clearly list them.
 If they see right away that you have the ability to get the job done, they’re much more likely to take your resume seriously.

<b>Work Experience:</b> This critical section of a resume is where you detail your work history in a consistent and compelling format.
 The Work Experience section should include company names, locations, employment dates, roles and titles you held and most
importantly, bullet points containing action verbs and data points that detail the relevant accomplishments of each position.
 This portion is essential for recruiters and hiring managers, who look to absorb information about your career experiences and
 connect your skills to what they’re looking for in a potential hire. Recruiters are often flooded with resume submissions and
 have to carefully source and identify quality candidates in a crowded pack — so make sure your work experience stands out.

<b>Education:</b> Since many jobs require a certain level of education, it’s important to mention your academic credentials
on your resume. However, this section shouldn’t take up too much space. In most cases, simply listing where you went to school,
when you attended and what degree you attained will be sufficient.
<b>Additional Experience:</b> An optional, but potentially very valuable, addition to your resume is Additional Experience.
This is a catch-all section at the tail end of your resume that allows you to highlight volunteer experience, awards and hobbies.
Again, it shouldn’t be too long — you don’t want it to detract from your skills or work experience — but it can be a good way to
provide a more well-rounded picture of who you are.
	</pre>
</div>


<div id="Speech" class="tabcontent">
  <h3>What is Public Speech</h3>
  <pre style="font-size:15px">
<b>How to Write a Great Speech for Public Speaking</b>
<b>1. Research Your Audience</b>
Whenever you do any type of writing you need to consider who you are trying to reach with your writing.
Speech writing is no different. In general, the more you know about your target audience the more effective your
writing will be in reaching them.
In the example above, you know that your audience is going to be the other members of the Chamber of Commerce--who are
likely to be small business owners just like you are.

Once you've defined your audience, you can gear your speech towards them. To do this, ask yourself questions like:

• What does this audience need?
• What problem can I solve for them?
• Is there anything else I need to consider about my listeners?

	In the example we're using for this tutorial, most small businesses in your town will fit one of the following three situations:

1. They've got a website that works well.
2. They've got a website, but the design is outdated or doesn't work well.
3. They don't have a website.
Note that the small business owners who fit in the last two categories could potentially be your clients.
It would be a good idea to get a list of the Chamber of Commerce members and look at their websites before you
make your speech publicly. You might be able to identify some problems with their existing websites.
<b>2. Select a Topic</b>
In this example your topic is already given, you've been invited to introduce your business. But you also know
that the speech is going to be fairly short--only five minutes long. While it's always a good idea to keep a
speech focused, this will be especially important for a short speech.
If I were writing the public speaking speech for the scenario we're working with, I'd narrow the topic down like this:
4. Create a list of the strengths of my business.
5. Compare the list of business strengths to the problems I observed with the other members' websites in the previous step.
6. Focus my presentation on the areas where my business strengths meet weaknesses (needs) of other Chamber of Commerce members.
Let's say that I noticed that quite a few members of the chamber have websites that use outdated fonts and the sites aren't
mobile-friendly. Instead of listing everything my web design business could possibly do, I'd focus my short speech on those
areas where I observed a need.
You can use a similar process to narrow the topic down any time you need to write a speech.
Avoid the temptation of trying to cover too much information. Most people are so overwhelmed by the sheer
amount of new data they receive each day that they can't keep up with it all. Your listeners are more likely to
remember your public speaking speech if it's tightly focused on one or two points.
Caution: Don't call out the problems you might observe in another business publicly. Although you might be tempted to do so,
that will likely result in embarrassing the business owner and will make it difficult for you to build a relationship with
them later. It's best to have such discussions privately unless the business owner has specifically given you permission to
use their problems as an example.
<b>3. Research Your Topic</b>
In the example we've been going over, you probably don't need to do a lot of research. And you've already narrowed your
topic down. But some public speaking situations may require that that you cover a topic that you are less familiar with.
For more detailed speech writing tips on how to study your subject (and other public speaking tips), review the tutorial:
<b>4. Write Your Speech</b>
Once you've completed the steps above, you're ready to write your speech. Here are some basic speech writing tips:
• Begin with an outline. To create a speech your audience will remember, you've got to be organized. An
outline is one of the best ways to organize your thoughts.
• Use a conversational tone. Write your speech the way you would normally talk. Work in some small talk or humor,
if appropriate.
• Use the speaker notes. Typically, speaker notes are not seen by the audience. So, this is a good place
to put reminders to yourself.
• Be specific. It's better to give examples or statistics to support a point than it is to make a vague statement.
• Use short sentences. It's likely you're not going to give your speech word for word anyway. Shorter sentences
will be easier to remember.
In this example scenario for the short speech we're preparing for the Chamber of Commerce, your outline could look
something like this:
7. Introduction. Give your name and the name of your business. (Show title slide of website home page with URL)
8. Type of Business. Describe what you do in a sentence or two. (Show slide with bulleted list)
9. Give example of a recent web design project. Emphasize areas that you know the other businesses need. (Show slides with examples)
10. Conclusion. Let the audience know that you'd be happy to help with their web design needs. Offer to talk to anyone
who's interested after the meeting. (Show closing slide that includes contact information)
11. Give out handouts. Many presentation software packages allow you to print out your speech as a handout.
For a networking-type presentation such as the one in our example, this can be a good idea since it gives your listeners
something to take with them that has your contact information on it.
That simple speech format should be enough for the short speech in our example. If you find it's too short when you practice,
you can always add more slides with examples.
If you've been asked to give a short speech, you can modify the speech format above to fit your needs.
If you're giving a longer speech, be sure to plan for audience breaks and question and answer sessions as you write.

<b>5. Select a Presentation Tool</b>
For most presentations, you'll want to use a professional presentation tool such as PowerPoint, Google Slides,
or a similar package. A presentation tool allows you to add visual interest to your public speaking speech.
Many of them allow you to add video or audio to further engage your audience.
If you don't already have a presentation tool, these tutorials can help you find the right one for your needs:
Once you've chosen a presentation tool, you're ready to choose a template for your presentation.

<b>6. Select a Template and Finish</b>
A presentation template controls the look and feel of your presentation. A good template design can make the
difference between a memorable public speech with eye-catching graphics and a dull, forgettable talk.
You could design your own presentation template from scratch. But, if you've never designed a presentation template
before, the result might look less than professional. And it could take a long time to get a good template.
Plus, hiring a designer to create an original presentation template can be pricey.A smart shortcut for most small business
owners is to invest in a professional presentation template that they can customize to fit with their branding and
marketing materials. If you choose this option, you'll save time and money. Plus, with a professional presentation template you get a
proven result. You can find some great-looking presentation templates at Envato Elements or GraphicRiver.
To browse through some example templates, look at these articles:

<b>7. How to Make a Public Speech</b>
Now that you've completed all of the steps above, you're ready to give your speech. Before you give your
speech publicly, though, there are a few things you should remember:
• Don't read your speech. If you can, memorize your speech. If you can't, it's okay to use note cards or even your
outline--but don't read those either. Just refer to them if you get stuck.
• Practice. Not only will practice help you get more comfortable with your speech, it'll will also help you determine
how your speech fits into the time slot you've been allotted.
• Do use visual aids. Of course, your presentation template adds a visual element to your public speech, but if other
visual aids work with your presentation they can be helpful as well.
• Dress comfortably, but professionally. The key is to fit in. If you're not sure how others at your meeting will
be dressed, contact the organizer and ask.
• Speak and stand naturally. It's normal to be a little nervous, but try to act as naturally as you can. Even if
you make a mistake, keep going. Your audience probably won't even notice.
• Be enthusiastic. Excitement is contagious. If you're excited about your topic, your audience will likely be excited too.

	</pre>
</div>

<div id="Certificate" class="tabcontent">
  <h3>What is an certificate Letter</h3>
  <pre style="font-size:15px" >How to Write a Certificate Letter
A certification letter is written to clarify or confirm information about a person or an entity.
These letters most times are part of a job or visa application, tenancy application, or college admission.
The letter should be brief and precise. You should follow the standard business format when writing the letter.
Writing these letters can be challenging especially if it’s your first time. Rely on templates and samples to

get a feeling of what you need to do.
• Use quality papers with a letterhead: When writing the certification letter, use a professional letterhead; it
will depict the authenticity of the letter.
• Make sure the letter is has a signature: Since we write a certification letter to confirm information, it should
bear an official signature of the writer. You should remember certification letters can serve as legal evidence.
• Date: Include the date of writing the letter.
• Salutation: Use the proper salutation for the reader.
• Subject: Summarize the purpose of the letter in a few words. Your recipient should be able to understand the purpose
of the letter by reading the subject line.
• The body: In the first few lines of the body, include all the necessary details about what you are certifying.
It should include any other details you consider relevant in the subsequent paragraphs.
• Complimentary close: Your certification letter must end in polite words.
• Proofread the certification letter: Avoid using different fonts and colors in your letter. Proofread the letter
to make sure the letter has no grammar or spelling mistakes.

<b>Samples of Certified Letter</b>

Kim George1738 W. Summerdale Avenue
Chicago, IL 60640
11th Feb 2019
Subject: Grades confirmation
Dear Mr. George,
I write this letter to certify that Jessica Timbley was a student at Chicago State University from
September 2014 to August 2017. She pursued a bachelor’s degree in Print media and attained a
GPA of 3.84.
Throughout her course of study, she showed exemplary dedication to studies and sports. In her
fourth year, she was the student’s deputy college president.
She stands to be an outstanding asset in your organization.
If you need further details, kindly contact my office.
Sincerely,
Tom Adams
Dean of students
Chicago State University</pre>
</div>

<div class="clearfix"></div>

<script>
function openCity(evt, cityName) {
  var i, tabcontent, tablinks,id;
  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";

  }
  document.getElementById(cityName).style.display = "block";
  evt.currentTarget.className += " active";
}


</script>
</body>
</html>

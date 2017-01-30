@extends('layouts.app')

@section('content')

@include('layouts.menu')

<div class="container">
    <div class="row buff">

        <div class="twelve columns panel">
        	<h2 class="icon-heading">Planering</h2>
        	<div>
        		<h3>TODO denna månaden</h3>
        		<i class="fa fa-square yellow" aria-hidden="true"></i><i class="fa fa-info-circle" aria-hidden="true"></i> BOKA NU Kampanj<br>
        		<i class="fa fa-square pink" aria-hidden="true"></i><i class="fa fa-info-circle" aria-hidden="true"></i> Ändring web<br>
        		<i class="fa fa-square blue" aria-hidden="true"></i><i class="fa fa-info-circle" aria-hidden="true"></i> Annons GP<br>
        	</div>
        	<div class="month"> 
		  		<ul>
				    <li class="prev">&#10094;</li>
				    <li class="next">&#10095;</li>
				    <li> Augusti 2016 </li>
			  	</ul>
			</div>

			<ul class="weekdays">
				<li>Mån</li>
				<li>Tis</li>
				<li>Ons</li>
				<li>Tor</li>
				<li>Fre</li>
				<li>Lör</li>
				<li>Sön</li>
			</ul>

			<ul class="days"> 
				<li>
					1
					<span class="todo-1">BOKA NU Kampanj</span>
				</li
				><li>
					2
					<span class="todo-1"></span>
				</li
				><li>
					3
					<span class="todo-1"></span>
				</li
				><li>
					4
					<span class="todo-1"></span>
				</li
				><li>
					5
					<span class="todo-1"></span>
				</li
				><li>
					6
					<span class="todo-1"></span>
				</li
				><li>
					7
					<span class="todo-1"></span>
				</li
				><li>
					8
					<span class="todo-1"></span>
				</li
				><li>
					9
					<span class="todo-1"></span>
				</li
				><li>
					<span class="active">10</span>
					<span class="todo-1"></span>
					<span class="todo-2">Web ändring</span>
				</li
				><li>
					11
					<span class="todo-1"></span>
					<span class="todo-2"></span>
				</li
				><li>
					12
					<span class="todo-2"></span>
				</li
				><li>
					13
					<span class="todo-2"></span>
				</li
				><li>
					14
					<span class="todo-2"></span>
				</li
				><li>
					15
					<span class="todo-2"></span>
				</li
				><li>16</li
				><li>17</li
				><li>18</li
				><li>19</li
				><li>20</li
				><li>21</li
				><li>22</li
				><li>
					23
					<span class="todo-3">Annons GP</span>
				</li
				><li>24</li
				><li>25</li
				><li>26</li
				><li>27</li
				><li>28</li
				><li>29</li
				><li>30</li
				><li>31</li
			</ul>
        </div>

        <div class="twelve columns panel">
        	<h2 class="icon-heading">TODO</h2>
        		<div>Sak 1</div>
        		<div>Sak 2</div>
        		<div>Sak 3</div>
        		<div>Sak 4</div>
        		<div>Sak 5</div>
        		<div>Sak 6</div>
        </div>
    </div>
</div>
@endsection

loadData(
	{
		 name: 'PERT Diagram',
		 nodes: [
			{ id: 'node0', value: { label: 'Start | 0 | 0' } },
<<<<<<< HEAD
			{ id: 'node1', value: { label: '1 | 2 | -1' } },
			{ id: 'node2', value: { label: '2 | 3 | -1' } },
			{ id: 'node3', value: { label: '3 | 2 | -1' } },
			{ id: 'node4', value: { label: '4 | 4 | -1' } },
			{ id: 'node5', value: { label: '5 | 4 | -1' } },
		 ],
		 links:[
			{ u: 'node0', v: 'node1', value: { label: 'code1[2]' } },
			{ u: 'node0', v: 'node2', value: { label: 'code2[3]' } },
			{ u: 'node0', v: 'node3', value: { label: 'code3[2]' } },
			{ u: 'node1', v: 'node4', value: { label: 'code4[2]' } },
			{ u: 'node2', v: 'node5', value: { label: 'code5[1]' } },
=======
			{ id: 'node1', value: { label: '1 | 16 | -1' } },
			{ id: 'node2', value: { label: '2 | 24 | -1' } },
			{ id: 'node3', value: { label: '3 | 18 | -1' } },
			{ id: 'node4', value: { label: '4 | 24 | -1' } },
			{ id: 'node5', value: { label: '5 | 15 | -1' } },
			{ id: 'node6', value: { label: '6 | 14 | -1' } },
		 ],
		 links:[
			{ u: 'node0', v: 'node1', value: { label: 'TABPRJ[16]' } },
			{ u: 'node1', v: 'node2', value: { label: 'qsqsd[8]' } },
			{ u: 'node2', v: 'node3', value: { label: 'qsd[10]' } },
			{ u: 'node1', v: 'node4', value: { label: 'qds[8]' } },
			{ u: 'node4', v: 'node5', value: { label: 'qsdqsd[7]' } },
			{ u: 'node2', v: 'node6', value: { label: 'dqsd[6]' } },
>>>>>>> 2ac419c27d7240e78e651ccd09f9e2c2d0eefa72
		 ]
	}
);
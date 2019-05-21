#include <stdio.h>

int main()
{
    int a[20],i,t,j,size;
    scanf("%d",&size);
     for(i=0;i<size;i++)
    {   
        scanf("%d",&a[i]);
    }
    for(i=0;i<size;i++)
    {   
        for(j=0;j<size;j++)
        {
        if(a[i]<a[j])
        {
            t=a[i];
            a[i]=a[j];
            a[j]=t;
        }
        }
    }
    for(i=0;i<size;i++)
    {
    printf("%d ",a[i]);
    }
    return 0;
}
